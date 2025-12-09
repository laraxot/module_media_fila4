<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

<<<<<<< HEAD
use Aws\S3\ObjectUploader;
use Exception;
=======
use Exception;
use Aws\Exception\MultipartUploadException;
use Aws\S3\Exception\S3Exception;
use Aws\S3\MultipartUploader;
use Aws\S3\ObjectUploader;
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 06bb10d (.)

use function Safe\fclose;
use function Safe\filesize;
use function Safe\fopen;
use function Safe\mime_content_type;
<<<<<<< HEAD
=======
use function Safe\rewind;
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
use function Safe\fopen;
use function Safe\fclose;
use function Safe\rewind;
use function Safe\filesize;
use function Safe\mime_content_type;
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)

class UploadFileAction extends BaseS3Action
{
    /**
     * Upload a file to S3
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $options
=======
     * @param array<string, mixed> $options
>>>>>>> 5200b63 (.)
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function execute(string $localFilePath, string $destinationFilePath, array $options = []): array
    {
=======
    public function execute(
        string $localFilePath, 
        string $destinationFilePath, 
        array $options = []
    ): array {
>>>>>>> 0a466ed (.)
        // Validation
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
            $error = "Local file does not exist: {$localFilePath}";
            $this->logger->error($error);
            return ['success' => false, 'error' => $error];
        }

        if (!is_readable($localFilePath)) {
            $error = "Local file is not readable: {$localFilePath}";
            $this->logger->error($error);
>>>>>>> 5200b63 (.)
            return ['success' => false, 'error' => $error];
        }

        $sourceFile = null;
<<<<<<< HEAD

=======
        
>>>>>>> 0a466ed (.)
        try {
            $sourceFile = fopen($localFilePath, 'rb');

            // Default options with proper typing
            $defaultOptions = [
                'ACL' => 'private',
<<<<<<< HEAD
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream',
            ];

            $uploadOptions = array_merge($defaultOptions, $options);

=======
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream'
            ];

            $uploadOptions = array_merge($defaultOptions, $options);
            
>>>>>>> 0a466ed (.)
            // Ensure ACL is string for type safety
            $acl = is_string($uploadOptions['ACL']) ? $uploadOptions['ACL'] : 'private';

            // Use ObjectUploader with proper type casting
            $uploader = new ObjectUploader(
                $this->s3Client,
                $this->bucketName,
                $destinationFilePath,
                $sourceFile,
                (string) ($uploadOptions['ACL'] ?? 'private'),
<<<<<<< HEAD
                $uploadOptions,
=======
                $uploadOptions
>>>>>>> 0a466ed (.)
            );

            $this->logger->info('Uploading file to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
<<<<<<< HEAD
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
=======
                'fileSize' => filesize($localFilePath)
            ]);

            $result = $uploader->upload();
                
            // Close the file after successful upload
            fclose($sourceFile);
                
            $this->logger->info('File uploaded successfully to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
                'objectUrl' => $result['ObjectURL'] ?? null
>>>>>>> 0a466ed (.)
            ]);

            return [
                'success' => true,
                'objectUrl' => $result['ObjectURL'] ?? null,
                'etag' => $result['ETag'] ?? null,
                'key' => $destinationFilePath,
<<<<<<< HEAD
                'bucket' => $this->bucketName,
            ];
        } catch (Exception $exception) {
            // Initialize $sourceFile as null if not already defined
            $sourceFile ??= null;

=======
                'bucket' => $this->bucketName
            ];

        } catch (Exception $exception) {
            // Initialize $sourceFile as null if not already defined
            $sourceFile = $sourceFile ?? null;
            
>>>>>>> 0a466ed (.)
            if (isset($sourceFile) && is_resource($sourceFile)) {
                fclose($sourceFile);
            }

            $this->logger->error('Error uploading file to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
                'trace' => $exception->getTraceAsString(),
=======
                'trace' => $exception->getTraceAsString()
>>>>>>> 0a466ed (.)
            ]);

            return [
                'success' => false,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
                'errorTrace' => $exception->getTraceAsString(),
            ];
        }
    }
}
=======
                'errorTrace' => $exception->getTraceAsString()
            ];
        }
    }
}
>>>>>>> 0a466ed (.)
