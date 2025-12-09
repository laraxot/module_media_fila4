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
<<<<<<< HEAD
     * @param  Media  $media
     */
    public function getPath($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'original').'/';
    }

    /**
     * @param  Media  $media
     */
    public function getPathForConversions($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'conversion');
    }

    /**
     * @param  Media  $media
     */
    public function getPathForResponsiveImages($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'responsive');
=======
     * @param Media $media
     */
    public function getPath($media): string
    {
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'original') . '/';
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'original').'/';
>>>>>>> 0a466ed (.)
    }

    /**
     * @param Media $media
     */
    public function getPathForConversions($media): string
    {
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'conversion');
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'conversion');
>>>>>>> 0a466ed (.)
    }

    /**
     * @param Media $media
     */
    public function getPathForResponsiveImages($media): string
    {
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'responsive');
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
    }

    /**
     * Get a unique base path for the given media.
     *
<<<<<<< HEAD
     * @param  Media  $media
=======
     * @param Media $media
>>>>>>> 5200b63 (.)
     */
    protected function getBasePath($media): string
    {
        Assert::string($id = $media->getKey());
<<<<<<< HEAD
        $key = md5($media->uuid.$id);
=======
        $key = md5($media->uuid . $id);
>>>>>>> 5200b63 (.)

        return "tmp/{$key}";
    }
}
