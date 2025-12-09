<?php

declare(strict_types=1);

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Models\Media;
use Modules\Media\Models\MediaConvert;
use Modules\Media\Models\TemporaryUpload;
use Modules\User\Models\User;

describe('Media Business Logic', function () {
    beforeEach(function () {
        Storage::fake('public');
    });

    it('can create media from temporary upload', function () {
        $user = User::factory()->create();
        $file = UploadedFile::fake()->image('test-image.jpg', 100, 100);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 9a4eacb (.)
=======

>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)

=======
        
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======

>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======

>>>>>>> f1c6d6e (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======

>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======

>>>>>>> 146bbc3 (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======

>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======

>>>>>>> f5f7069 (.)
=======
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 13d1d7e (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======

>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======

>>>>>>> fa051fc (.)
=======

>>>>>>> 22b1256 (.)
=======
        /** @var \Illuminate\Database\Eloquent\Collection */
>>>>>>> e28bed7 (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======

>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======

>>>>>>> 37b6a94 (.)
        $temporaryUpload = TemporaryUpload::factory()->create([
=======
        $temporaryUpload = TemporaryUpload/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 1b9d086 (.)
=======
        $temporaryUpload = TemporaryUpload::factory()->create([
>>>>>>> 2a4b5df (.)
=======
        $temporaryUpload = TemporaryUpload/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 627ab5c (.)
=======
        $temporaryUpload = TemporaryUpload::factory()->create([
>>>>>>> de4643e (.)
            'user_id' => $user->id,
            'file_name' => $file->getClientOriginalName(),
            'file_size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
        ]);

        $media = Media::factory()->create([
            'user_id' => $user->id,
            'file_name' => $temporaryUpload->file_name,
            'file_size' => $temporaryUpload->file_size,
            'mime_type' => $temporaryUpload->mime_type,
            'disk' => 'public',
            'collection_name' => 'default',
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
        expect($media)
            ->toBeInstanceOf(Media::class)
            ->and($media->file_name)
            ->toBe($temporaryUpload->file_name)
            ->and($media->file_size)
            ->toBe($temporaryUpload->file_size)
            ->and($media->mime_type)
            ->toBe($temporaryUpload->mime_type);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
        expect($media)->toBeInstanceOf(Media::class)
            ->and($media->file_name)->toBe($temporaryUpload->file_name)
            ->and($media->file_size)->toBe($temporaryUpload->file_size)
            ->and($media->mime_type)->toBe($temporaryUpload->mime_type);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)

        $this->assertDatabaseHas('media', [
            'id' => $media->id,
            'user_id' => $user->id,
            'file_name' => $temporaryUpload->file_name,
            'file_size' => $temporaryUpload->file_size,
            'mime_type' => $temporaryUpload->mime_type,
        ]);
    });

    it('can convert media to different formats', function () {
        $user = User::factory()->create();
        $media = Media::factory()->create([
            'user_id' => $user->id,
            'mime_type' => 'image/jpeg',
        ]);

        $mediaConvert = MediaConvert::factory()->create([
            'media_id' => $media->id,
            'original_format' => 'jpeg',
            'target_format' => 'png',
            'status' => 'pending',
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
        expect($mediaConvert)
            ->toBeInstanceOf(MediaConvert::class)
            ->and($mediaConvert->media_id)
            ->toBe($media->id)
            ->and($mediaConvert->original_format)
            ->toBe('jpeg')
            ->and($mediaConvert->target_format)
            ->toBe('png');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
        expect($mediaConvert)->toBeInstanceOf(MediaConvert::class)
            ->and($mediaConvert->media_id)->toBe($media->id)
            ->and($mediaConvert->original_format)->toBe('jpeg')
            ->and($mediaConvert->target_format)->toBe('png');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)

        $this->assertDatabaseHas('media_converts', [
            'id' => $mediaConvert->id,
            'media_id' => $media->id,
            'original_format' => 'jpeg',
            'target_format' => 'png',
            'status' => 'pending',
        ]);
    });

    it('can track temporary upload lifecycle', function () {
        $user = User::factory()->create();
        $file = UploadedFile::fake()->image('test-image.jpg', 100, 100);

        $temporaryUpload = TemporaryUpload::factory()->create([
            'user_id' => $user->id,
            'file_name' => $file->getClientOriginalName(),
            'file_size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'status' => 'uploading',
        ]);

        // Simulate upload completion
        $temporaryUpload->update(['status' => 'completed']);

        expect($temporaryUpload->fresh()->status)->toBe('completed');

        $this->assertDatabaseHas('temporary_uploads', [
            'id' => $temporaryUpload->id,
            'user_id' => $user->id,
            'status' => 'completed',
        ]);
    });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    it('can manage media collections', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
        /** @var User */
>>>>>>> 8bb13d7 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 1b9d086 (.)

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)

=======
        
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======

>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======

>>>>>>> f1c6d6e (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======

>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======

>>>>>>> 146bbc3 (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======

>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======

>>>>>>> f5f7069 (.)
=======
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> 13d1d7e (.)
=======

>>>>>>> 22b1256 (.)
        $profileMedia = Media::factory()->create([
=======
        $profileMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 1b9d086 (.)
=======
    it('can manage media collections', function () {
=======
    it('can manage media collections', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> e28bed7 (.)
        $user = User::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $profileMedia = Media::factory()->create([
>>>>>>> 2a4b5df (.)
=======
=======
        /** @var User */
>>>>>>> df262d8 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $profileMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 627ab5c (.)
=======
    it('can manage media collections', function () {
        $user = User::factory()->create();

        $profileMedia = Media::factory()->create([
>>>>>>> de4643e (.)
            'user_id' => $user->id,
            'collection_name' => 'profile',
            'disk' => 'public',
        ]);

        $documentMedia = Media::factory()->create([
            'user_id' => $user->id,
            'collection_name' => 'documents',
            'disk' => 'public',
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
        expect($profileMedia->collection_name)
            ->toBe('profile')
            ->and($documentMedia->collection_name)
            ->toBe('documents');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
=======
        expect($profileMedia->collection_name)->toBe('profile')
            ->and($documentMedia->collection_name)->toBe('documents');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        expect($profileMedia->collection_name)->toBe('profile')
            ->and($documentMedia->collection_name)->toBe('documents');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
        expect($profileMedia->collection_name)->toBe('profile')
            ->and($documentMedia->collection_name)->toBe('documents');
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)

        $this->assertDatabaseHas('media', [
            'id' => $profileMedia->id,
            'collection_name' => 'profile',
        ]);

        $this->assertDatabaseHas('media', [
            'id' => $documentMedia->id,
            'collection_name' => 'documents',
        ]);
    });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    it('can validate media file types', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
        /** @var User */
>>>>>>> 8bb13d7 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 1b9d086 (.)

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)

=======
        
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======

>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======

>>>>>>> f1c6d6e (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======

>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======

>>>>>>> 146bbc3 (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======

>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======

>>>>>>> f5f7069 (.)
=======
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> 13d1d7e (.)
=======

>>>>>>> 22b1256 (.)
        $validImage = Media::factory()->create([
=======
        $validImage = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 1b9d086 (.)
=======
    it('can validate media file types', function () {
=======
    it('can validate media file types', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> e28bed7 (.)
        $user = User::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $validImage = Media::factory()->create([
>>>>>>> 2a4b5df (.)
=======
=======
        /** @var User */
>>>>>>> df262d8 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $validImage = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 627ab5c (.)
=======
    it('can validate media file types', function () {
        $user = User::factory()->create();

        $validImage = Media::factory()->create([
>>>>>>> de4643e (.)
            'user_id' => $user->id,
            'mime_type' => 'image/jpeg',
            'file_name' => 'valid-image.jpg',
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
=======
        expect($validImage->isImage())->toBeTrue()
            ->and($validImage->isDocument())->toBeFalse();
>>>>>>> a12f125f4a (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> b93ef594b4 (.)
=======
        expect($validImage->isImage())->toBeTrue()
            ->and($validImage->isDocument())->toBeFalse();
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
=======
        expect($validImage->isImage())->toBeTrue()
            ->and($validImage->isDocument())->toBeFalse();
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> f1c6d6e (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
=======
        expect($validImage->isImage())->toBeTrue()
            ->and($validImage->isDocument())->toBeFalse();
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 146bbc3 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
=======
        expect($validImage->isImage())->toBeTrue()
            ->and($validImage->isDocument())->toBeFalse();
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> f5f7069 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
=======
        expect($validImage->isImage())->toBeTrue()
            ->and($validImage->isDocument())->toBeFalse();
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> fa051fc (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 22b1256 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
=======
        expect($validImage->isImage())->toBeTrue()
            ->and($validImage->isDocument())->toBeFalse();
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
        expect($validImage->isImage())->toBeTrue()->and($validImage->isDocument())->toBeFalse();
>>>>>>> 37b6a94 (.)

        $validDocument = Media::factory()->create([
            'user_id' => $user->id,
            'mime_type' => 'application/pdf',
            'file_name' => 'valid-document.pdf',
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
=======
        expect($validDocument->isImage())->toBeFalse()
            ->and($validDocument->isDocument())->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> b93ef594b4 (.)
=======
        expect($validDocument->isImage())->toBeFalse()
            ->and($validDocument->isDocument())->toBeTrue();
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
=======
        expect($validDocument->isImage())->toBeFalse()
            ->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> f1c6d6e (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
=======
        expect($validDocument->isImage())->toBeFalse()
            ->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 146bbc3 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
=======
        expect($validDocument->isImage())->toBeFalse()
            ->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> f5f7069 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
=======
        expect($validDocument->isImage())->toBeFalse()
            ->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> fa051fc (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 22b1256 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
=======
        expect($validDocument->isImage())->toBeFalse()
            ->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
        expect($validDocument->isImage())->toBeFalse()->and($validDocument->isDocument())->toBeTrue();
>>>>>>> 37b6a94 (.)
    });

    it('can track media conversion status', function () {
        $user = User::factory()->create();
        $media = Media::factory()->create([
            'user_id' => $user->id,
            'mime_type' => 'image/jpeg',
        ]);

        $mediaConvert = MediaConvert::factory()->create([
            'media_id' => $media->id,
            'status' => 'pending',
        ]);

        // Simulate conversion progress
        $mediaConvert->update(['status' => 'processing']);
        $mediaConvert->update(['status' => 'completed']);

        expect($mediaConvert->fresh()->status)->toBe('completed');

        $this->assertDatabaseHas('media_converts', [
            'id' => $mediaConvert->id,
            'status' => 'completed',
        ]);
    });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    it('can manage media permissions', function (): void {
        /** @var User */
        $owner = User/** @phpstan-ignore-line */ ::factory()->create();
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $otherUser = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
        /** @var User */
>>>>>>> 8bb13d7 (.)
        $otherUser = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 1b9d086 (.)

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)

=======
        
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======

>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======

>>>>>>> f1c6d6e (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======

>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======

>>>>>>> 146bbc3 (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======

>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======

>>>>>>> f5f7069 (.)
=======
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> 13d1d7e (.)
=======

>>>>>>> 22b1256 (.)
        $media = Media::factory()->create([
=======
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 1b9d086 (.)
=======
    it('can manage media permissions', function () {
=======
    it('can manage media permissions', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> e28bed7 (.)
        $owner = User::factory()->create();
=======
        $owner = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 627ab5c (.)
        /** @var \Illuminate\Database\Eloquent\Collection */
=======
        /** @var User */
        $owner = User/** @phpstan-ignore-line */ ::factory()->create();
        /** @var User */
>>>>>>> df262d8 (.)
        $otherUser = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $media = Media::factory()->create([
>>>>>>> 2a4b5df (.)
=======
        $media = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 627ab5c (.)
=======
    it('can manage media permissions', function () {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();

        $media = Media::factory()->create([
>>>>>>> de4643e (.)
            'user_id' => $owner->id,
            'is_public' => false,
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
        expect($media->user_id)
            ->toBe($owner->id)
            ->and($media->is_public)
            ->toBeFalse()
            ->and($media->user_id)
            ->not->toBe($otherUser->id);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
        expect($media->user_id)->toBe($owner->id)
            ->and($media->is_public)->toBeFalse()
            ->and($media->user_id)->not->toBe($otherUser->id);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
<<<<<<< HEAD
=======
        expect($media->user_id)->toBe($owner->id)
            ->and($media->is_public)->toBeFalse()
            ->and($media->user_id)->not->toBe($otherUser->id);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        expect($media->user_id)->toBe($owner->id)
            ->and($media->is_public)->toBeFalse()
            ->and($media->user_id)->not->toBe($otherUser->id);
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
    });

    it('can handle media deletion', function () {
        $user = User::factory()->create();
        $media = Media::factory()->create([
            'user_id' => $user->id,
        ]);

        $media->delete();

        $this->assertSoftDeleted('media', [
            'id' => $media->id,
        ]);

        $this->assertDatabaseMissing('media', [
            'id' => $media->id,
            'deleted_at' => null,
        ]);
    });

    it('can generate media urls', function () {
        $user = User::factory()->create();
        $media = Media::factory()->create([
            'user_id' => $user->id,
            'file_name' => 'test-image.jpg',
            'disk' => 'public',
        ]);

        $url = $media->getUrl();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
=======
        expect($url)->not->toBeEmpty()
            ->and($url)->toContain('test-image.jpg');
>>>>>>> a12f125f4a (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> b93ef594b4 (.)
=======
        expect($url)->not->toBeEmpty()
            ->and($url)->toContain('test-image.jpg');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
=======
        expect($url)->not->toBeEmpty()
            ->and($url)->toContain('test-image.jpg');
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> f1c6d6e (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
=======
        expect($url)->not->toBeEmpty()
            ->and($url)->toContain('test-image.jpg');
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 146bbc3 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
=======
        expect($url)->not->toBeEmpty()
            ->and($url)->toContain('test-image.jpg');
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> f5f7069 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
=======
        expect($url)->not->toBeEmpty()
            ->and($url)->toContain('test-image.jpg');
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> fa051fc (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 22b1256 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
=======
        expect($url)->not->toBeEmpty()
            ->and($url)->toContain('test-image.jpg');
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
        expect($url)->not->toBeEmpty()->and($url)->toContain('test-image.jpg');
>>>>>>> 37b6a94 (.)
    });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    it('can validate file size limits', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
        /** @var User */
>>>>>>> 8bb13d7 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 1b9d086 (.)

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)

=======
        
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======

>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======

>>>>>>> f1c6d6e (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======

>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======

>>>>>>> 146bbc3 (.)
=======

=======
        
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======

>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======

>>>>>>> f5f7069 (.)
=======
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> 13d1d7e (.)
=======

>>>>>>> 22b1256 (.)
        $validMedia = Media::factory()->create([
=======
        $validMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 1b9d086 (.)
=======
    it('can validate file size limits', function () {
=======
    it('can validate file size limits', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> e28bed7 (.)
        $user = User::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $validMedia = Media::factory()->create([
>>>>>>> 2a4b5df (.)
=======
=======
        /** @var User */
>>>>>>> df262d8 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $validMedia = Media/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 627ab5c (.)
=======
    it('can validate file size limits', function () {
        $user = User::factory()->create();

        $validMedia = Media::factory()->create([
>>>>>>> de4643e (.)
            'user_id' => $user->id,
            'file_size' => 1024 * 1024, // 1MB
        ]);

        expect($validMedia->file_size)->toBeLessThanOrEqual(10 * 1024 * 1024); // 10MB limit

        $largeMedia = Media::factory()->create([
            'user_id' => $user->id,
            'file_size' => 15 * 1024 * 1024, // 15MB
        ]);

        expect($largeMedia->file_size)->toBeGreaterThan(10 * 1024 * 1024);
    });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    it('can track media usage statistics', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
=======
        /** @var User */
>>>>>>> 8bb13d7 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 1b9d086 (.)
=======
    it('can track media usage statistics', function () {
=======
    it('can track media usage statistics', function (): void {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
>>>>>>> e28bed7 (.)
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2a4b5df (.)
=======
<<<<<<< HEAD
>>>>>>> c08a553 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
=======
        /** @var User */
>>>>>>> df262d8 (.)
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 627ab5c (.)
=======
    it('can track media usage statistics', function () {
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> de4643e (.)
=======
<<<<<<< HEAD
>>>>>>> 10ef3f7 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
        
        Media::factory()->count(5)->create([
            'user_id' => $user->id,
            'mime_type' => 'image/jpeg',
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> b93ef594b4 (.)

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

<<<<<<< HEAD
        expect($totalMedia)->toBe(8)
            ->and($imageCount)->toBe(5)
            ->and($documentCount)->toBe(3);
>>>>>>> a12f125f4a (.)
=======
        expect($totalMedia)->toBe(8)->and($imageCount)->toBe(5)->and($documentCount)->toBe(3);
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)

        Media::factory()->count(3)->create([
            'user_id' => $user->id,
            'mime_type' => 'application/pdf',
        ]);

        $totalMedia = Media::where('user_id', $user->id)->count();
        $imageCount = Media::where('user_id', $user->id)
            ->where('mime_type', 'like', 'image/%')
            ->count();
        $documentCount = Media::where('user_id', $user->id)
            ->where('mime_type', 'like', 'application/%')
            ->count();

        expect($totalMedia)->toBe(8)
            ->and($imageCount)->toBe(5)
            ->and($documentCount)->toBe(3);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
    });
});
