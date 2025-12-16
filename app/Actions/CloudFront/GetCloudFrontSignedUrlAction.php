<?php

declare(strict_types=1);

namespace Modules\Media\Actions\CloudFront;

use Aws\CloudFront\CloudFrontClient;
use Modules\Media\Datas\CloudFrontData;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5200b63 (.)
=======
=======

>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
/**
 * Action per la traduzione di elementi di una collezione.
 */
class GetCloudFrontSignedUrlAction
{
    use QueueableAction;

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
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();

        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 06bb10d (.)
=======
   
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();
        
        
        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest'
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ]);

        return $cloudFront->getSignedUrl([
            'url' => $data->base_url.'/'.ltrim($key, '/'),
            'expires' => time() + ($expiry * 60),
            'key_pair_id' => $data->key_pair_id,
<<<<<<< HEAD
            'private_key' => $data->getPrivateKey(),
        ]);
    }
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
>>>>>>> 06bb10d (.)
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
>>>>>>> 5200b63 (.)
=======
=======
            'private_key' => $data->getPrivateKey()
            ,
        ]);
    }

   

  
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
}
