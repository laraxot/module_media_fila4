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
=======
>>>>>>> 37a2da6 (.)
                'Key' => $key,
            ]);

            $metadata = $result['@metadata'] ?? [];
            $effectiveUri = is_array($metadata) && isset($metadata['effectiveUri'])
                ? ((string) $metadata['effectiveUri'])
                : null;
<<<<<<< HEAD
=======
                'Key'    => $key,
            ]);

            $metadata = $result['@metadata'] ?? [];
            $effectiveUri = is_array($metadata) && isset($metadata['effectiveUri']) ? (string) $metadata['effectiveUri'] : null;
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

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
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> 0a466ed (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 37a2da6 (.)
            ];

            $this->logger->info('File info retrieved successfully', [
                'key' => $key,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'size' => $fileInfo['contentLength'],
            ]);

            return $fileInfo;
<<<<<<< HEAD
=======
                'size' => $fileInfo['contentLength']
            ]);

            return $fileInfo;

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
        } catch (S3Exception $exception) {
            $this->logger->error('Error getting file info from S3', [
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
                'exists' => false,
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
