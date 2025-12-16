<?php

declare(strict_types=1);

namespace Modules\Media\Services;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Media Upload Service
 *
 * Handles file uploads with validation, optimization, and storage
 */
class MediaUploadService
{
    /**
     * Allowed mime types
     */
    protected array $allowedMimeTypes = [
        'image/jpeg',
        'image/png',
        'image/jpg',
        'image/gif',
        'image/webp',
        'application/pdf',
    ];

    /**
     * Max file size in bytes (10MB)
     */
    protected int $maxFileSize = 10485760;

    /**
     * Upload file to model
     *
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function upload(
        UploadedFile $file,
        HasMedia $model,
        string $collection = 'default',
        ?string $customName = null
    ): Media {
        // Validate file
        $this->validateFile($file);

        // Generate filename
        $filename = $customName ?? $this->generateFilename($file);

        try {
            // Add file to media library
            $media = $model->addMedia($file)
                ->usingFileName($filename)
                ->toMediaCollection($collection);

            Log::info('Media uploaded', [
                'model' => get_class($model),
                'model_id' => $model->getKey(),
                'collection' => $collection,
                'filename' => $filename,
                'size' => $file->getSize(),
            ]);

            return $media;
        } catch (Exception $e) {
            Log::error('Media upload failed', [
                'error' => $e->getMessage(),
                'file' => $file->getClientOriginalName(),
            ]);

            throw $e;
        }
    }

    /**
     * Upload multiple files
     *
     * @param  array<UploadedFile>  $files
     * @return array<Media>
     */
    public function uploadMultiple(
        array $files,
        HasMedia $model,
        string $collection = 'default'
    ): array {
        $uploaded = [];

        foreach ($files as $file) {
            try {
                $uploaded[] = $this->upload($file, $model, $collection);
            } catch (Exception $e) {
                Log::warning('Skipped file upload', [
                    'file' => $file->getClientOriginalName(),
                    'error' => $e->getMessage(),
                ]);
            }
        }

        return $uploaded;
    }

    /**
     * Delete media
     */
    public function delete(Media $media): bool
    {
        try {
            $media->delete();

            Log::info('Media deleted', [
                'media_id' => $media->id,
                'filename' => $media->file_name,
            ]);

            return true;
        } catch (Exception $e) {
            Log::error('Media deletion failed', [
                'media_id' => $media->id,
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }

    /**
     * Validate uploaded file
     *
     * @throws InvalidArgumentException
     */
    protected function validateFile(UploadedFile $file): void
    {
        // Check if file is valid
        if (! $file->isValid()) {
            throw new InvalidArgumentException('Invalid file upload');
        }

        // Check mime type
        if (! in_array($file->getMimeType(), $this->allowedMimeTypes, true)) {
            throw new InvalidArgumentException(
                sprintf('File type %s not allowed', $file->getMimeType())
            );
        }

        // Check file size
        if ($file->getSize() > $this->maxFileSize) {
            throw new InvalidArgumentException(
                sprintf('File size exceeds maximum of %d bytes', $this->maxFileSize)
            );
        }
    }

    /**
     * Generate unique filename
     */
    protected function generateFilename(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $basename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        $unique = Str::random(8);

        return sprintf('%s-%s.%s', $basename, $unique, $extension);
    }

    /**
     * Get file info
     */
    public function getFileInfo(UploadedFile $file): array
    {
        return [
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'extension' => $file->getClientOriginalExtension(),
            'is_image' => str_starts_with($file->getMimeType() ?? '', 'image/'),
        ];
    }

    /**
     * Check if file is image
     */
    public function isImage(UploadedFile $file): bool
    {
        return str_starts_with($file->getMimeType() ?? '', 'image/');
    }

    /**
     * Get allowed mime types
     */
    public function getAllowedMimeTypes(): array
    {
        return $this->allowedMimeTypes;
    }

    /**
     * Get max file size
     */
    public function getMaxFileSize(): int
    {
        return $this->maxFileSize;
    }

    /**
     * Set allowed mime types
     */
    public function setAllowedMimeTypes(array $mimeTypes): self
    {
        $this->allowedMimeTypes = $mimeTypes;

        return $this;
    }

    /**
     * Set max file size
     */
    public function setMaxFileSize(int $bytes): self
    {
        $this->maxFileSize = $bytes;

        return $this;
    }
}
