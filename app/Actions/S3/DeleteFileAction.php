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
=======
                'Key' => $key,
>>>>>>> 5200b63 (.)
=======
                'Key' => $key,
=======
                'Key'    => $key,
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
            ]);

            $this->logger->info('File deleted successfully from S3', [
                'key' => $key,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false,
>>>>>>> 5200b63 (.)
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false,
=======
                'deleteMarker' => $result['DeleteMarker'] ?? false
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
            ]);

            return [
                'success' => true,
                'key' => $key,
                'deleteMarker' => $result['DeleteMarker'] ?? false,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                'versionId' => $result['VersionId'] ?? null,
            ];
>>>>>>> 5200b63 (.)
=======
                'versionId' => $result['VersionId'] ?? null,
            ];
=======
                'versionId' => $result['VersionId'] ?? null
            ];

>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
        } catch (S3Exception $exception) {
            $this->logger->error('Error deleting file from S3', [
                'key' => $key,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 5200b63 (.)
=======
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
            ]);

            return [
                'success' => false,
                'key' => $key,
                'error' => $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
                'errorCode' => $exception->getStatusCode(),
            ];
        }
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 06bb10d (.)
=======
                'errorCode' => $exception->getStatusCode()
            ];
        }
    }
}
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
