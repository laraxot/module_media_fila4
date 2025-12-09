<?php

declare(strict_types=1);

namespace Modules\Media\Actions\S3;

use Aws\S3\S3Client;
use Psr\Log\LoggerInterface;
use Spatie\QueueableAction\QueueableAction;

abstract class BaseS3Action
{
    use QueueableAction;

    protected S3Client $s3Client;
<<<<<<< HEAD

    protected string $bucketName;

=======
    protected string $bucketName;
>>>>>>> 5200b63 (.)
    protected LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->bucketName = $this->getStringConfig('media.aws.bucket_name', 'AWS_BUCKET_NAME', '');
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
        $this->s3Client = new S3Client([
            'region' => $this->getStringConfig('media.aws.region', 'AWS_REGION', 'us-east-1'),
            'version' => '2006-03-01',
            'credentials' => [
<<<<<<< HEAD
                'key' => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', ''),
            ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'key' => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', ''),
            ],
=======
                'key'    => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', '')
            ]
>>>>>>> a12f125f4a (.)
=======
                'key' => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', ''),
            ],
>>>>>>> b93ef594b4 (.)
=======
                'key'    => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', '')
            ]
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ]);
    }

    /**
     * Get string configuration value with type safety.
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $configKey  Config key to check first
     * @param  string  $envKey  Environment variable key as fallback
     * @param  string  $default  Default value if neither config nor env is valid
=======
=======
=======
     * 
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
     *
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
     * @param string $configKey Config key to check first
     * @param string $envKey Environment variable key as fallback
     * @param string $default Default value if neither config nor env is valid
>>>>>>> 5200b63 (.)
     * @return string Type-safe string value
     */
    protected function getStringConfig(string $configKey, string $envKey, string $default): string
    {
        // Check config first
        $configValue = config($configKey);
        if (is_string($configValue) && trim($configValue) !== '') {
            return $configValue;
        }
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
        // Fallback to environment
        $envValue = env($envKey);
        if (is_string($envValue) && trim($envValue) !== '') {
            return $envValue;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)

        // Return default
        return $default;
    }
}
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Return default
        return $default;
    }
}
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        // Return default
        return $default;
    }
}
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
