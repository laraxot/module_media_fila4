<?php

declare(strict_types=1);

namespace Modules\Media\Actions\CloudFront;

use Aws\CloudFront\CloudFrontClient;
use Modules\Media\Datas\CloudFrontData;
use Spatie\QueueableAction\QueueableAction;

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
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
=======

>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
/**
 * Action per la traduzione di elementi di una collezione.
 */
class GetCloudFrontSignedUrlAction
{
    use QueueableAction;

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
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();

        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest',
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
=======
   
=======
>>>>>>> b93ef594b4 (.)
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();

        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
<<<<<<< HEAD
            'version' => 'latest'
>>>>>>> a12f125f4a (.)
=======
            'version' => 'latest',
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
=======
>>>>>>> 47a54fe (.)
   
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();
        
        
        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest'
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> f1c6d6e (.)
        ]);

        return $cloudFront->getSignedUrl([
            'url' => $data->base_url.'/'.ltrim($key, '/'),
            'expires' => time() + ($expiry * 60),
            'key_pair_id' => $data->key_pair_id,
            'private_key' => $data->getPrivateKey(),
        ]);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'private_key' => $data->getPrivateKey(),
        ]);
    }
=======
=======
>>>>>>> origin/develop
            'private_key' => $data->getPrivateKey()
            ,
        ]);
    }

   

  
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'private_key' => $data->getPrivateKey(),
        ]);
    }
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
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
        ]);

        return $cloudFront->getSignedUrl([
            'url' => $data->base_url . '/' . ltrim($key, '/'),
            'expires' => time() + ($expiry * 60),
            'key_pair_id' => $data->key_pair_id,
<<<<<<< HEAD
            'private_key' => $data->getPrivateKey(),
        ]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'private_key' => $data->getPrivateKey(),
        ]);
    }
=======
=======
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
            'private_key' => $data->getPrivateKey()
            ,
        ]);
    }

   

  
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 47a54fe (.)
=======
            'private_key' => $data->getPrivateKey(),
        ]);
    }
<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
}
