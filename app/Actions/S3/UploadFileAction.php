<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

use Exception;
use Aws\Exception\MultipartUploadException;
use Aws\S3\Exception\S3Exception;
use Aws\S3\MultipartUploader;
use Aws\S3\ObjectUploader;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)

use function Safe\fclose;
use function Safe\filesize;
use function Safe\fopen;
use function Safe\mime_content_type;
use function Safe\rewind;
<<<<<<< HEAD
=======
use function Safe\fopen;
use function Safe\fclose;
use function Safe\rewind;
use function Safe\filesize;
use function Safe\mime_content_type;
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

class UploadFileAction extends BaseS3Action
{
    /**
     * Upload a file to S3
     *
     * @param array<string, mixed> $options
     * @return array<string, mixed>
     */
<<<<<<< HEAD
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
=======
    public function execute(string $localFilePath, string $destinationFilePath, array $options = []): array
    {
>>>>>>> 37a2da6 (.)
        // Validation
        if (!file_exists($localFilePath)) {
            $error = "Local file does not exist: {$localFilePath}";
            $this->logger->error($error);
            return ['success' => false, 'error' => $error];
        }

        if (!is_readable($localFilePath)) {
            $error = "Local file is not readable: {$localFilePath}";
            $this->logger->error($error);
            return ['success' => false, 'error' => $error];
        }

        $sourceFile = null;
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 0a466ed (.)
=======

>>>>>>> 37a2da6 (.)
        try {
            $sourceFile = fopen($localFilePath, 'rb');

            // Default options with proper typing
            $defaultOptions = [
                'ACL' => 'private',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream',
            ];

            $uploadOptions = array_merge($defaultOptions, $options);

<<<<<<< HEAD
=======
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream'
            ];

            $uploadOptions = array_merge($defaultOptions, $options);
            
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
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
<<<<<<< HEAD
                $uploadOptions,
=======
                $uploadOptions
>>>>>>> 0a466ed (.)
=======
                $uploadOptions,
>>>>>>> 37a2da6 (.)
            );

            $this->logger->info('Uploading file to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'fileSize' => filesize($localFilePath),
            ]);

            $result = $uploader->upload();

            // Close the file after successful upload
            fclose($sourceFile);

            $this->logger->info('File uploaded successfully to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
                'objectUrl' => $result['ObjectURL'] ?? null,
<<<<<<< HEAD
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
=======
>>>>>>> 37a2da6 (.)
            ]);

            return [
                'success' => true,
                'objectUrl' => $result['ObjectURL'] ?? null,
                'etag' => $result['ETag'] ?? null,
                'key' => $destinationFilePath,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'bucket' => $this->bucketName,
            ];
        } catch (Exception $exception) {
            // Initialize $sourceFile as null if not already defined
            $sourceFile ??= null;

<<<<<<< HEAD
=======
                'bucket' => $this->bucketName
            ];

        } catch (Exception $exception) {
            // Initialize $sourceFile as null if not already defined
            $sourceFile = $sourceFile ?? null;
            
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
            if (isset($sourceFile) && is_resource($sourceFile)) {
                fclose($sourceFile);
            }

            $this->logger->error('Error uploading file to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
                'trace' => $exception->getTraceAsString(),
=======
                'trace' => $exception->getTraceAsString()
>>>>>>> 0a466ed (.)
=======
                'trace' => $exception->getTraceAsString(),
>>>>>>> 37a2da6 (.)
            ]);

            return [
                'success' => false,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'errorTrace' => $exception->getTraceAsString(),
            ];
        }
    }
}
<<<<<<< HEAD
=======
                'errorTrace' => $exception->getTraceAsString()
            ];
        }
    }
}
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
