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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
                'Key' => $key,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'Key' => $key,
=======
                'Key'    => $key,
>>>>>>> a12f125f4a (.)
=======
                'Key' => $key,
>>>>>>> b93ef594b4 (.)
=======
                'Key'    => $key,
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
                'Key' => $key,
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
                'Key' => $key,
=======
                'Key'    => $key,
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
                'Key' => $key,
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
                'Key' => $key,
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
            ]);

            $this->logger->info('File deleted successfully from S3', [
                'key' => $key,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
                'deleteMarker' => $result['DeleteMarker'] ?? false,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'deleteMarker' => $result['DeleteMarker'] ?? false,
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false
>>>>>>> a12f125f4a (.)
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false,
>>>>>>> b93ef594b4 (.)
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false,
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
                'deleteMarker' => $result['DeleteMarker'] ?? false,
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false,
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false,
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
            ]);

            return [
                'success' => true,
                'key' => $key,
                'deleteMarker' => $result['DeleteMarker'] ?? false,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
                'versionId' => $result['VersionId'] ?? null,
            ];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'versionId' => $result['VersionId'] ?? null,
            ];
=======
                'versionId' => $result['VersionId'] ?? null
            ];

>>>>>>> a12f125f4a (.)
=======
                'versionId' => $result['VersionId'] ?? null,
            ];
>>>>>>> b93ef594b4 (.)
=======
                'versionId' => $result['VersionId'] ?? null
            ];

>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
                'versionId' => $result['VersionId'] ?? null,
            ];
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
                'versionId' => $result['VersionId'] ?? null,
            ];
=======
                'versionId' => $result['VersionId'] ?? null
            ];

>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
                'versionId' => $result['VersionId'] ?? null,
            ];
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
                'versionId' => $result['VersionId'] ?? null,
            ];
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
        } catch (S3Exception $exception) {
            $this->logger->error('Error deleting file from S3', [
                'key' => $key,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
                'statusCode' => $exception->getStatusCode(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> a12f125f4a (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> b93ef594b4 (.)
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
            ]);

            return [
                'success' => false,
                'key' => $key,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
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
                'errorCode' => $exception->getStatusCode(),
            ];
        }
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
=======
                'errorCode' => $exception->getStatusCode()
=======
                'errorCode' => $exception->getStatusCode(),
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
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
=======
>>>>>>> 47a54fe (.)
                'errorCode' => $exception->getStatusCode()
            ];
        }
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
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
