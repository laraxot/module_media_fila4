<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Aws\S3\ObjectUploader;
use Exception;
=======
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use Exception;
use Aws\Exception\MultipartUploadException;
use Aws\S3\Exception\S3Exception;
use Aws\S3\MultipartUploader;
use Aws\S3\ObjectUploader;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
use Aws\S3\ObjectUploader;
use Exception;
>>>>>>> f41e45e (.)

use function Safe\fclose;
use function Safe\filesize;
use function Safe\fopen;
use function Safe\mime_content_type;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use function Safe\rewind;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
=======
=======
use function Safe\fopen;
=======

>>>>>>> b93ef594b4 (.)
use function Safe\fclose;
use function Safe\filesize;
use function Safe\fopen;
use function Safe\mime_content_type;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use function Safe\rewind;
>>>>>>> b93ef594b4 (.)
>>>>>>> 47a54fe (.)
=======
use function Safe\fopen;
use function Safe\fclose;
use function Safe\rewind;
use function Safe\filesize;
use function Safe\mime_content_type;
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
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
>>>>>>> f41e45e (.)

class UploadFileAction extends BaseS3Action
{
    /**
     * Upload a file to S3
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $options
=======
     * @param array<string, mixed> $options
>>>>>>> 5200b63 (.)
=======
     * @param  array<string, mixed>  $options
>>>>>>> f41e45e (.)
     * @return array<string, mixed>
     */
    public function execute(string $localFilePath, string $destinationFilePath, array $options = []): array
    {
        // Validation
<<<<<<< HEAD
<<<<<<< HEAD
        if (! file_exists($localFilePath)) {
            $error = "Local file does not exist: {$localFilePath}";
            $this->logger->error($error);

            return ['success' => false, 'error' => $error];
        }

        if (! is_readable($localFilePath)) {
            $error = "Local file is not readable: {$localFilePath}";
            $this->logger->error($error);

=======
        if (!file_exists($localFilePath)) {
=======
        if (! file_exists($localFilePath)) {
>>>>>>> f41e45e (.)
            $error = "Local file does not exist: {$localFilePath}";
            $this->logger->error($error);

            return ['success' => false, 'error' => $error];
        }

        if (! is_readable($localFilePath)) {
            $error = "Local file is not readable: {$localFilePath}";
            $this->logger->error($error);
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======

>>>>>>> f41e45e (.)
            return ['success' => false, 'error' => $error];
        }

        $sourceFile = null;

        try {
            $sourceFile = fopen($localFilePath, 'rb');

            // Default options with proper typing
            $defaultOptions = [
                'ACL' => 'private',
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream',
            ];

            $uploadOptions = array_merge($defaultOptions, $options);

            // Ensure ACL is string for type safety
            $acl = is_string($uploadOptions['ACL']) ? $uploadOptions['ACL'] : 'private';

            // Use ObjectUploader with proper type casting
            $uploader = new ObjectUploader(
                $this->s3Client,
                $this->bucketName,
                $destinationFilePath,
                $sourceFile,
                (string) ($uploadOptions['ACL'] ?? 'private'),
                $uploadOptions,
            );

            $this->logger->info('Uploading file to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
                'fileSize' => filesize($localFilePath),
            ]);

<<<<<<< HEAD
            /** @var array{ObjectURL?: string, ETag?: string} $result AWS SDK returns array */
=======
>>>>>>> 5200b63 (.)
            $result = $uploader->upload();

            // Close the file after successful upload
            fclose($sourceFile);

            $this->logger->info('File uploaded successfully to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
                'objectUrl' => $result['ObjectURL'] ?? null,
            ]);

            return [
                'success' => true,
                'objectUrl' => $result['ObjectURL'] ?? null,
                'etag' => $result['ETag'] ?? null,
                'key' => $destinationFilePath,
                'bucket' => $this->bucketName,
            ];
        } catch (Exception $exception) {
            // Initialize $sourceFile as null if not already defined
            $sourceFile ??= null;

            if (isset($sourceFile) && is_resource($sourceFile)) {
                fclose($sourceFile);
            }

            $this->logger->error('Error uploading file to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString(),
            ]);

            return [
                'success' => false,
                'error' => $exception->getMessage(),
                'errorTrace' => $exception->getTraceAsString(),
            ];
        }
    }
}
