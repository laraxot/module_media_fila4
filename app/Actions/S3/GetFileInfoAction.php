<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

use Aws\S3\Exception\S3Exception;

class GetFileInfoAction extends BaseS3Action
{
    /**
     * Get detailed file information from S3.
     *
     * @return array<string, mixed>
     */
    public function execute(string $key): array
    {
        try {
            $result = $this->s3Client->headObject([
                'Bucket' => $this->bucketName,
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
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
                'Key' => $key,
            ]);

            $metadata = $result['@metadata'] ?? [];
            $effectiveUri = is_array($metadata) && isset($metadata['effectiveUri'])
                ? ((string) $metadata['effectiveUri'])
                : null;
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
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
                'Key'    => $key,
            ]);

            $metadata = $result['@metadata'] ?? [];
            $effectiveUri = is_array($metadata) && isset($metadata['effectiveUri']) ? (string) $metadata['effectiveUri'] : null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
>>>>>>> a12f125f4a (.)
=======
                'Key' => $key,
            ]);

            $metadata = $result['@metadata'] ?? [];
            $effectiveUri = is_array($metadata) && isset($metadata['effectiveUri'])
                ? ((string) $metadata['effectiveUri'])
                : null;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
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

            $fileInfo = [
                'exists' => true,
                'key' => $key,
                'effectiveUri' => $effectiveUri,
                'contentLength' => $result['ContentLength'] ?? null,
                'contentType' => $result['ContentType'] ?? null,
                'lastModified' => $result['LastModified'] ?? null,
                'etag' => $result['ETag'] ?? null,
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
                'metadata' => $result['Metadata'] ?? [],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> a12f125f4a (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> b93ef594b4 (.)
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> f1c6d6e (.)
=======
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
            ];

            $this->logger->info('File info retrieved successfully', [
                'key' => $key,
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
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
                'size' => $fileInfo['contentLength'],
            ]);

            return $fileInfo;
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
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
                'size' => $fileInfo['contentLength']
            ]);

            return $fileInfo;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
>>>>>>> a12f125f4a (.)
=======
                'size' => $fileInfo['contentLength'],
            ]);

            return $fileInfo;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
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
        } catch (S3Exception $exception) {
            $this->logger->error('Error getting file info from S3', [
                'key' => $key,
                'error' => $exception->getMessage(),
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
=======
>>>>>>> 7ea0764 (.)
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
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
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> f1c6d6e (.)
=======
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
            ]);

            return [
                'exists' => false,
                'key' => $key,
                'error' => $exception->getMessage(),
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
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ea0764 (.)
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
=======
=======
>>>>>>> 877e05f (.)
                'errorCode' => $exception->getStatusCode()
            ];
        }
    }
}
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
