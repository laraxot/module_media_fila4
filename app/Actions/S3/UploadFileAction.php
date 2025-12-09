<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

<<<<<<< HEAD
<<<<<<< HEAD
use Aws\S3\ObjectUploader;
use Exception;
=======
=======
>>>>>>> 47a54fe (.)
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Aws\Exception\MultipartUploadException;
use Aws\S3\Exception\S3Exception;
use Aws\S3\MultipartUploader;
use Aws\S3\ObjectUploader;
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

use function Safe\fclose;
use function Safe\filesize;
use function Safe\fopen;
use function Safe\mime_content_type;
<<<<<<< HEAD
=======
use function Safe\rewind;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $localFilePath, string $destinationFilePath, array $options = []): array
    {
=======
=======
>>>>>>> origin/develop
    public function execute(
        string $localFilePath, 
        string $destinationFilePath, 
        array $options = []
    ): array {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(string $localFilePath, string $destinationFilePath, array $options = []): array
    {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
        try {
            $sourceFile = fopen($localFilePath, 'rb');

            // Default options with proper typing
            $defaultOptions = [
                'ACL' => 'private',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream',
            ];

            $uploadOptions = array_merge($defaultOptions, $options);

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream'
            ];

            $uploadOptions = array_merge($defaultOptions, $options);
            
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                'ContentType' => mime_content_type($localFilePath) ?: 'application/octet-stream',
            ];

            $uploadOptions = array_merge($defaultOptions, $options);

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $uploadOptions,
=======
                $uploadOptions
>>>>>>> a12f125f4a (.)
=======
                $uploadOptions,
>>>>>>> b93ef594b4 (.)
=======
                $uploadOptions
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            );

            $this->logger->info('Uploading file to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
=======
=======
                'fileSize' => filesize($localFilePath)
=======
                'fileSize' => filesize($localFilePath),
>>>>>>> b93ef594b4 (.)
            ]);

            $result = $uploader->upload();

            // Close the file after successful upload
            fclose($sourceFile);

            $this->logger->info('File uploaded successfully to S3', [
                'localPath' => $localFilePath,
                's3Key' => $destinationFilePath,
<<<<<<< HEAD
                'objectUrl' => $result['ObjectURL'] ?? null
>>>>>>> a12f125f4a (.)
=======
                'objectUrl' => $result['ObjectURL'] ?? null,
>>>>>>> b93ef594b4 (.)
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
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            ]);

            return [
                'success' => true,
                'objectUrl' => $result['ObjectURL'] ?? null,
                'etag' => $result['ETag'] ?? null,
                'key' => $destinationFilePath,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
                'bucket' => $this->bucketName,
            ];
        } catch (Exception $exception) {
            // Initialize $sourceFile as null if not already defined
            $sourceFile ??= null;

<<<<<<< HEAD
=======
=======
                'bucket' => $this->bucketName
=======
                'bucket' => $this->bucketName,
>>>>>>> b93ef594b4 (.)
            ];
        } catch (Exception $exception) {
            // Initialize $sourceFile as null if not already defined
<<<<<<< HEAD
            $sourceFile = $sourceFile ?? null;
            
>>>>>>> a12f125f4a (.)
=======
            $sourceFile ??= null;

>>>>>>> b93ef594b4 (.)
=======
                'bucket' => $this->bucketName
            ];

        } catch (\Exception $exception) {
            // Initialize $sourceFile as null if not already defined
            $sourceFile = $sourceFile ?? null;
            
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'trace' => $exception->getTraceAsString(),
=======
                'trace' => $exception->getTraceAsString()
>>>>>>> a12f125f4a (.)
=======
                'trace' => $exception->getTraceAsString(),
>>>>>>> b93ef594b4 (.)
=======
                'trace' => $exception->getTraceAsString()
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            ]);

            return [
                'success' => false,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
                'errorTrace' => $exception->getTraceAsString(),
            ];
        }
    }
}
<<<<<<< HEAD
=======
=======
                'errorTrace' => $exception->getTraceAsString()
=======
                'errorTrace' => $exception->getTraceAsString(),
>>>>>>> b93ef594b4 (.)
            ];
        }
    }
}
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                'errorTrace' => $exception->getTraceAsString()
            ];
        }
    }
}
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
