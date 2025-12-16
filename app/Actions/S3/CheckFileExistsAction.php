<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

use Aws\S3\Exception\S3Exception;

class CheckFileExistsAction extends BaseS3Action
{
    /**
     * Check if a file exists in S3
     */
    public function execute(string $key): bool
    {
        try {
            $this->s3Client->headObject([
                'Bucket' => $this->bucketName,
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
                'Key' => $key,
            ]);

            $this->logger->info('File existence check completed', ['key' => $key, 'exists' => true]);
<<<<<<< HEAD

            return true;
<<<<<<< HEAD
=======
=======
                'Key'    => $key,
=======
                'Key' => $key,
>>>>>>> b93ef594b4 (.)
            ]);

            $this->logger->info('File existence check completed', ['key' => $key, 'exists' => true]);
            return true;
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                'Key'    => $key,
            ]);
            
            $this->logger->info('File existence check completed', ['key' => $key, 'exists' => true]);
            return true;
            
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        } catch (S3Exception $exception) {
            if ($exception->getStatusCode() === 404) {
                $this->logger->info('File existence check completed', ['key' => $key, 'exists' => false]);

                return false;
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
=======
            return true;
=======
                'Key'    => $key,
            ]);
            
            $this->logger->info('File existence check completed', ['key' => $key, 'exists' => true]);
            return true;
            
>>>>>>> 0a466ed (.)
        } catch (S3Exception $exception) {
            if ($exception->getStatusCode() === 404) {
                $this->logger->info('File existence check completed', ['key' => $key, 'exists' => false]);
                return false;
            }
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 06bb10d (.)

            $this->logger->error('Error checking file existence in S3', [
                'key' => $key,
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString(),
            ]);

            throw $exception;
        }
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
            
=======

>>>>>>> b93ef594b4 (.)
            $this->logger->error('Error checking file existence in S3', [
                'key' => $key,
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString(),
            ]);

            throw $exception;
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
            
            $this->logger->error('Error checking file existence in S3', [
                'key' => $key,
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString()
            ]);
            
            throw $exception;
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
