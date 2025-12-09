<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Modules\Fixcity\Models\Ticket;
use Modules\Media\Services\MediaUploadService;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    Storage::fake('public');
    $this->service = new MediaUploadService;
    $this->model = Ticket::factory()->create();
});

test('upload stores file successfully', function (): void {
    $file = UploadedFile::fake()->image('test.jpg');

    $media = $this->service->upload($file, $this->model);

    expect($media)->toBeInstanceOf(Media::class);
    expect($media->file_name)->toContain('.jpg');
});

test('upload validates mime type', function (): void {
    $file = UploadedFile::fake()->create('test.exe', 100);

    expect(fn () => $this->service->upload($file, $this->model))
        ->toThrow(InvalidArgumentException::class, 'File type');
});

test('upload validates file size', function (): void {
    $file = UploadedFile::fake()->create('test.jpg', 15000); // 15MB

    expect(fn () => $this->service->upload($file, $this->model))
        ->toThrow(InvalidArgumentException::class, 'File size exceeds');
});

test('upload accepts jpeg images', function (): void {
    $file = UploadedFile::fake()->image('test.jpeg');

    $media = $this->service->upload($file, $this->model);

    expect($media->mime_type)->toBe('image/jpeg');
});

test('upload accepts png images', function (): void {
    $file = UploadedFile::fake()->image('test.png');

    $media = $this->service->upload($file, $this->model);

    expect($media->mime_type)->toBe('image/png');
});

test('upload accepts pdf files', function (): void {
    $file = UploadedFile::fake()->create('document.pdf', 100, 'application/pdf');

    $media = $this->service->upload($file, $this->model);

    expect($media->mime_type)->toBe('application/pdf');
});

test('upload generates unique filename', function (): void {
    $file1 = UploadedFile::fake()->image('test.jpg');
    $file2 = UploadedFile::fake()->image('test.jpg');

    $media1 = $this->service->upload($file1, $this->model);
    $media2 = $this->service->upload($file2, $this->model);

    expect($media1->file_name)->not->toBe($media2->file_name);
});

test('upload uses custom name if provided', function (): void {
    $file = UploadedFile::fake()->image('test.jpg');

    $media = $this->service->upload($file, $this->model, 'default', 'custom-name.jpg');

    expect($media->file_name)->toBe('custom-name.jpg');
});

test('upload stores in specified collection', function (): void {
    $file = UploadedFile::fake()->image('test.jpg');

    $media = $this->service->upload($file, $this->model, 'photos');

    expect($media->collection_name)->toBe('photos');
});

test('upload multiple stores all files', function (): void {
    $files = [
        UploadedFile::fake()->image('test1.jpg'),
        UploadedFile::fake()->image('test2.jpg'),
        UploadedFile::fake()->image('test3.jpg'),
    ];

    $uploaded = $this->service->uploadMultiple($files, $this->model);

    expect($uploaded)->toHaveCount(3);
});

test('upload multiple skips invalid files', function (): void {
    $files = [
        UploadedFile::fake()->image('test1.jpg'),
        UploadedFile::fake()->create('invalid.exe', 100),
        UploadedFile::fake()->image('test2.jpg'),
    ];

    $uploaded = $this->service->uploadMultiple($files, $this->model);

    expect($uploaded)->toHaveCount(2);
});

test('delete removes media', function (): void {
    $file = UploadedFile::fake()->image('test.jpg');
    $media = $this->service->upload($file, $this->model);

    $result = $this->service->delete($media);

    expect($result)->toBeTrue();
    expect(Media::find($media->id))->toBeNull();
});

test('get file info returns correct data', function (): void {
    $file = UploadedFile::fake()->image('test.jpg', 100, 100);

    $info = $this->service->getFileInfo($file);

    expect($info)->toHaveKeys(['original_name', 'mime_type', 'size', 'extension', 'is_image']);
    expect($info['original_name'])->toBe('test.jpg');
    expect($info['is_image'])->toBeTrue();
});

test('is image returns true for images', function (): void {
    $file = UploadedFile::fake()->image('test.jpg');

    expect($this->service->isImage($file))->toBeTrue();
});

test('is image returns false for non-images', function (): void {
    $file = UploadedFile::fake()->create('document.pdf', 100, 'application/pdf');

    expect($this->service->isImage($file))->toBeFalse();
});

test('get allowed mime types returns array', function (): void {
    $types = $this->service->getAllowedMimeTypes();

    expect($types)->toBeArray();
    expect($types)->toContain('image/jpeg');
    expect($types)->toContain('application/pdf');
});

test('get max file size returns integer', function (): void {
    $size = $this->service->getMaxFileSize();

    expect($size)->toBeInt();
    expect($size)->toBe(10485760); // 10MB
});

test('set allowed mime types updates configuration', function (): void {
    $newTypes = ['image/jpeg', 'image/png'];

    $this->service->setAllowedMimeTypes($newTypes);

    expect($this->service->getAllowedMimeTypes())->toBe($newTypes);
});

test('set max file size updates configuration', function (): void {
    $newSize = 5242880; // 5MB

    $this->service->setMaxFileSize($newSize);

    expect($this->service->getMaxFileSize())->toBe($newSize);
});

test('upload validates with custom max size', function (): void {
    $this->service->setMaxFileSize(1024); // 1KB
    $file = UploadedFile::fake()->create('test.jpg', 2); // 2KB

    expect(fn () => $this->service->upload($file, $this->model))
        ->toThrow(InvalidArgumentException::class);
});

test('upload validates with custom mime types', function (): void {
    $this->service->setAllowedMimeTypes(['image/png']);
    $file = UploadedFile::fake()->image('test.jpg'); // JPEG

    expect(fn () => $this->service->upload($file, $this->model))
        ->toThrow(InvalidArgumentException::class);
});

test('upload handles invalid file gracefully', function (): void {
    $file = UploadedFile::fake()->create('test.jpg', 0);
    $file = new UploadedFile($file->path(), 'test.jpg', 'image/jpeg', UPLOAD_ERR_NO_FILE, true);

    expect(fn () => $this->service->upload($file, $this->model))
        ->toThrow(InvalidArgumentException::class, 'Invalid file upload');
});

test('filename is slugified', function (): void {
    $file = UploadedFile::fake()->image('Test File With Spaces.jpg');

    $media = $this->service->upload($file, $this->model);

    expect($media->file_name)->toContain('test-file-with-spaces');
});

test('upload logs success', function (): void {
    $file = UploadedFile::fake()->image('test.jpg');

    Log::shouldReceive('info')
        ->once()
        ->with('Media uploaded', Mockery::type('array'));

    $this->service->upload($file, $this->model);
});

test('delete logs success', function (): void {
    $file = UploadedFile::fake()->image('test.jpg');
    $media = $this->service->upload($file, $this->model);

    Log::shouldReceive('info')
        ->with('Media deleted', Mockery::type('array'));

    $this->service->delete($media);
});
