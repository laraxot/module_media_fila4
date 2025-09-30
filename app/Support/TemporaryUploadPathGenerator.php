<?php

declare(strict_types=1);

namespace Modules\Media\Support;

use Modules\Media\Models\Media;
use Webmozart\Assert\Assert;

// use Spatie\MediaLibrary\MediaCollections\Models\Media;
// use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
// use Modules\Media\Contracts\PathGenerator;
// implements PathGenerator
class TemporaryUploadPathGenerator
{
    /**
     * @param Media $media
     */
    public function getPath($media): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'original') . '/';
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'original').'/';
>>>>>>> 0a466ed (.)
=======
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'original') . '/';
>>>>>>> 37a2da6 (.)
    }

    /**
     * @param Media $media
     */
    public function getPathForConversions($media): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'conversion');
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'conversion');
>>>>>>> 0a466ed (.)
=======
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'conversion');
>>>>>>> 37a2da6 (.)
    }

    /**
     * @param Media $media
     */
    public function getPathForResponsiveImages($media): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'responsive');
>>>>>>> 0a466ed (.)
=======
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
>>>>>>> 37a2da6 (.)
    }

    /**
     * Get a unique base path for the given media.
     *
     * @param Media $media
     */
    protected function getBasePath($media): string
    {
        Assert::string($id = $media->getKey());
        $key = md5($media->uuid . $id);

        return "tmp/{$key}";
    }
}
