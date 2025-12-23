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
=======

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
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
=======
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();

        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
   
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();
        
        
        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest'
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
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
            'private_key' => $data->getPrivateKey(),
        ]);
    }
=======
            'private_key' => $data->getPrivateKey()
            ,
        ]);
    }

   

  
>>>>>>> 0a466ed (.)
=======
            'private_key' => $data->getPrivateKey(),
        ]);
    }
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
}
