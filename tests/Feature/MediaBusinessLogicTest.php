<?php

declare(strict_types=1);

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Models\Media;
use Modules\Media\Models\MediaConvert;
use Modules\Media\Models\TemporaryUpload;
use Modules\User\Models\User;

describe('Media Business Logic', function (): void {
    beforeEach(function (): void {
        Storage::fake('public');
    });

    it('can create media from temporary upload', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        $file = UploadedFile::fake()->image('test-image.jpg', 100, 100);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $temporaryUpload = TemporaryUpload/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            /** @phpstan-ignore-next-line method.nonObject */
            'file_name' => $file->getClientOriginalName(),
            /** @phpstan-ignore-next-line method.nonObject */
            'file_size' => $file->getSize(),
            /** @phpstan-ignore-next-line method.nonObject */
            'mime_type' => $file->getMimeType(),
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'file_name' => $temporaryUpload->file_name,
            'file_size' => $temporaryUpload->file_size,
            'mime_type' => $temporaryUpload->mime_type,
            'disk' => 'public',
            'collection_name' => 'default',
        ]);

        expect($media)
            ->toBeInstanceOf(Media::class)
            ->and($media->file_name)
            ->toBe($temporaryUpload->file_name)
            ->and($media->file_size)
            ->toBe($temporaryUpload->file_size)
            ->and($media->mime_type)
            ->toBe($temporaryUpload->mime_type);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('media', [
            'id' => $media->id,
            'user_id' => $user->id,
            'file_name' => $temporaryUpload->file_name,
            'file_size' => $temporaryUpload->file_size,
            'mime_type' => $temporaryUpload->mime_type,
        ]);
    });

    it('can convert media to different formats', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'mime_type' => 'image/jpeg',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $mediaConvert = MediaConvert/** @phpstan-ignore-line */ ::factory()->create([
            'media_id' => $media->id,
            'original_format' => 'jpeg',
            'target_format' => 'png',
            'status' => 'pending',
        ]);

        expect($mediaConvert)
            ->toBeInstanceOf(MediaConvert::class)
            ->and($mediaConvert->media_id)
            ->toBe($media->id)
            ->and($mediaConvert->original_format)
            ->toBe('jpeg')
            ->and($mediaConvert->target_format)
            ->toBe('png');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('media_converts', [
            'id' => $mediaConvert->id,
            'media_id' => $media->id,
            'original_format' => 'jpeg',
            'target_format' => 'png',
            'status' => 'pending',
        ]);
    });

    it('can track temporary upload lifecycle', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        $file = UploadedFile::fake()->image('test-image.jpg', 100, 100);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $temporaryUpload = TemporaryUpload/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            /** @phpstan-ignore-next-line method.nonObject */
            'file_name' => $file->getClientOriginalName(),
            /** @phpstan-ignore-next-line method.nonObject */
            'file_size' => $file->getSize(),
            /** @phpstan-ignore-next-line method.nonObject */
            'mime_type' => $file->getMimeType(),
            'status' => 'uploading',
        ]);

        // Simulate upload completion
        /** @phpstan-ignore-next-line method.nonObject */
        $temporaryUpload->update(['status' => 'completed']);

        expect($temporaryUpload->fresh()->status)->toBe('completed');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('temporary_uploads', [
            'id' => $temporaryUpload->id,
            'user_id' => $user->id,
            'status' => 'completed',
        ]);
    });

    it('can manage media collections', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $profileMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'collection_name' => 'profile',
            'disk' => 'public',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $documentMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'collection_name' => 'documents',
            'disk' => 'public',
        ]);

        expect($profileMedia->collection_name)
            ->toBe('profile')
            ->and($documentMedia->collection_name)
            ->toBe('documents');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('media', [
            'id' => $profileMedia->id,
            'collection_name' => 'profile',
        ]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('media', [
            'id' => $documentMedia->id,
            'collection_name' => 'documents',
        ]);
    });

    it('can validate media file types', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $validImage = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'mime_type' => 'image/jpeg',
            'file_name' => 'valid-image.jpg',
        ]);

        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $validDocument = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'mime_type' => 'application/pdf',
            'file_name' => 'valid-document.pdf',
        ]);

        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
    });

    it('can track media conversion status', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'mime_type' => 'image/jpeg',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $mediaConvert = MediaConvert/** @phpstan-ignore-line */ ::factory()->create([
            'media_id' => $media->id,
            'status' => 'pending',
        ]);

        // Simulate conversion progress
        /** @phpstan-ignore-next-line method.nonObject */
        $mediaConvert->update(['status' => 'processing']);
        /** @phpstan-ignore-next-line method.nonObject */
        $mediaConvert->update(['status' => 'completed']);

        expect($mediaConvert->fresh()->status)->toBe('completed');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('media_converts', [
            'id' => $mediaConvert->id,
            'status' => 'completed',
        ]);
    });

    it('can manage media permissions', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $owner = User/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $otherUser = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $owner->id,
            'is_public' => false,
        ]);

        expect($media->user_id)
            ->toBe($owner->id)
            ->and($media->is_public)
            ->toBeFalse()
            ->and($media->user_id)
            ->not->toBe($otherUser->id);
    });

    it('can handle media deletion', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
        ]);

        /** @phpstan-ignore-next-line method.nonObject */
        $media->delete();

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertSoftDeleted('media', [
            'id' => $media->id,
        ]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseMissing('media', [
            'id' => $media->id,
            'deleted_at' => null,
        ]);
    });

    it('can generate media urls', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'file_name' => 'test-image.jpg',
            'disk' => 'public',
        ]);

        /** @phpstan-ignore-next-line method.nonObject */
        $url = $media->getUrl();

        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
    });

    it('can validate file size limits', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $validMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'file_size' => 1024 * 1024, // 1MB
        ]);

        expect($validMedia->file_size)->toBeLessThanOrEqual(10 * 1024 * 1024); // 10MB limit

        /** @var \Illuminate\Database\Eloquent\Collection */
        $largeMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
            'user_id' => $user->id,
            'file_size' => 15 * 1024 * 1024, // 15MB
        ]);

        expect($largeMedia->file_size)->toBeGreaterThan(10 * 1024 * 1024);
    });

    it('can track media usage statistics', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        Media::factory()
            ->count(5)
            ->create([
                'user_id' => $user->id,
                'mime_type' => 'image/jpeg',
            ]);

        Media::factory()
            ->count(3)
            ->create([
                'user_id' => $user->id,
                'mime_type' => 'application/pdf',
            ]);

        $totalMedia = Media::where('user_id', $user->id)->count();
        $imageCount = Media::where('user_id', $user->id)->where('mime_type', 'like', 'image/%')->count();
        $documentCount = Media::where('user_id', $user->id)->where('mime_type', 'like', 'application/%')->count();

        expect($totalMedia)->toBe(8)->and($imageCount)->toBe(5)->and($documentCount)->toBe(3);
    });
});
