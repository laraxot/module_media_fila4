<?php

declare(strict_types=1);

namespace Modules\Media\Actions\CloudFront;

use Aws\CloudFront\CloudFrontClient;
use Modules\Media\Datas\CloudFrontData;
use Spatie\QueueableAction\QueueableAction;

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
/**
 * Action per la traduzione di elementi di una collezione.
 */
class GetCloudFrontSignedUrlAction
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();

        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest',
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
   
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();
        
        
        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest'
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
}
