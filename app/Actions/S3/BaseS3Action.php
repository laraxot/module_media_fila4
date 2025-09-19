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
    protected string $bucketName;
    protected LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->bucketName = $this->getStringConfig('media.aws.bucket_name', 'AWS_BUCKET_NAME', '');
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 0a466ed (.)
=======

>>>>>>> 37a2da6 (.)
        $this->s3Client = new S3Client([
            'region' => $this->getStringConfig('media.aws.region', 'AWS_REGION', 'us-east-1'),
            'version' => '2006-03-01',
            'credentials' => [
<<<<<<< HEAD
<<<<<<< HEAD
                'key' => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', ''),
            ],
=======
                'key'    => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', '')
            ]
>>>>>>> 0a466ed (.)
=======
                'key' => $this->getStringConfig('media.aws.access_key_id', 'AWS_ACCESS_KEY_ID', ''),
                'secret' => $this->getStringConfig('media.aws.secret_access_key', 'AWS_SECRET_ACCESS_KEY', ''),
            ],
>>>>>>> 37a2da6 (.)
        ]);
    }

    /**
     * Get string configuration value with type safety.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 0a466ed (.)
=======
     *
>>>>>>> 37a2da6 (.)
     * @param string $configKey Config key to check first
     * @param string $envKey Environment variable key as fallback
     * @param string $default Default value if neither config nor env is valid
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
<<<<<<< HEAD

=======
        
>>>>>>> 0a466ed (.)
=======

>>>>>>> 37a2da6 (.)
        // Fallback to environment
        $envValue = env($envKey);
        if (is_string($envValue) && trim($envValue) !== '') {
            return $envValue;
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)

        // Return default
        return $default;
    }
}
<<<<<<< HEAD
=======
        
        // Return default
        return $default;
    }
}
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
