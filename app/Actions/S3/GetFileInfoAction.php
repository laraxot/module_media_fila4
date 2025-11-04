<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

use Aws\S3\Exception\S3Exception;

class GetFileInfoAction extends BaseS3Action
{
    /**
     * Get detailed file information from S3
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 91c1d65 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
                'Key'    => $key,
            ]);

            $metadata = $result['@metadata'] ?? [];
            $effectiveUri = is_array($metadata) && isset($metadata['effectiveUri']) ? (string) $metadata['effectiveUri'] : null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 146bbc3 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> f5f7069 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> fa051fc (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 22b1256 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
=======
                'metadata' => $result['Metadata'] ?? []
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 37b6a94 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> e5c049f (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
                'metadata' => $result['Metadata'] ?? [],
>>>>>>> 53e059b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 91c1d65 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
                'size' => $fileInfo['contentLength']
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 146bbc3 (.)
=======
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> f5f7069 (.)
=======
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> fa051fc (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 22b1256 (.)
=======
                'statusCode' => $exception->getStatusCode(),
=======
                'statusCode' => $exception->getStatusCode()
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 37b6a94 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> e5c049f (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
                'statusCode' => $exception->getStatusCode(),
>>>>>>> 53e059b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 91c1d65 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 1d21a10 (.)
=======
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
                'errorCode' => $exception->getStatusCode()
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
<<<<<<< HEAD
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
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)
