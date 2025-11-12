<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

use Aws\S3\Exception\S3Exception;

class DeleteFileAction extends BaseS3Action
{
    /**
     * Delete a file from S3
     *
     * @return array<string, mixed>
     */
    public function execute(string $key): array
    {
        try {
            $result = $this->s3Client->deleteObject([
                'Bucket' => $this->bucketName,
<<<<<<< HEAD
<<<<<<< HEAD
                'Key' => $key,
=======
                'Key'    => $key,
>>>>>>> 0a466ed (.)
=======
                'Key' => $key,
>>>>>>> 37a2da6 (.)
            ]);

            $this->logger->info('File deleted successfully from S3', [
                'key' => $key,
<<<<<<< HEAD
<<<<<<< HEAD
                'deleteMarker' => $result['DeleteMarker'] ?? false,
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false
>>>>>>> 0a466ed (.)
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false,
>>>>>>> 37a2da6 (.)
            ]);

            return [
                'success' => true,
                'key' => $key,
                'deleteMarker' => $result['DeleteMarker'] ?? false,
<<<<<<< HEAD
<<<<<<< HEAD
                'versionId' => $result['VersionId'] ?? null,
            ];
=======
                'versionId' => $result['VersionId'] ?? null
            ];

>>>>>>> 0a466ed (.)
=======
                'versionId' => $result['VersionId'] ?? null,
            ];
>>>>>>> 37a2da6 (.)
        } catch (S3Exception $exception) {
            $this->logger->error('Error deleting file from S3', [
                'key' => $key,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 37a2da6 (.)
            ]);

            return [
                'success' => false,
                'key' => $key,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'errorCode' => $exception->getStatusCode(),
            ];
        }
    }
}
<<<<<<< HEAD
=======
                'errorCode' => $exception->getStatusCode()
            ];
        }
    }
}
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
