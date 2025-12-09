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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
     * @param Media $media
=======
     * @param  Media  $media
>>>>>>> f41e45e (.)
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
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'responsive');
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'responsive');
>>>>>>> a12f125f4a (.)
=======
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
>>>>>>> b93ef594b4 (.)
=======
     * @param \Modules\Media\Models\Media $media
     */
    public function getPath($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'original').'/';
    }

    /**
     * @param \Modules\Media\Models\Media $media
     */
    public function getPathForConversions($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'conversion');
    }

    /**
     * @param \Modules\Media\Models\Media $media
     */
    public function getPathForResponsiveImages($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'responsive');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'responsive');
>>>>>>> f41e45e (.)
    }

    /**
     * Get a unique base path for the given media.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Media  $media
=======
     * @param Media $media
>>>>>>> 5200b63 (.)
=======
     * @param Media $media
=======
<<<<<<< HEAD
     * @param Media $media
=======
     * @param \Modules\Media\Models\Media $media
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
     * @param Media $media
>>>>>>> f1c6d6e (.)
=======
     * @param  Media  $media
>>>>>>> f41e45e (.)
     */
    protected function getBasePath($media): string
    {
        Assert::string($id = $media->getKey());
<<<<<<< HEAD
<<<<<<< HEAD
        $key = md5($media->uuid.$id);
=======
        $key = md5($media->uuid . $id);
>>>>>>> 5200b63 (.)
=======
        $key = md5($media->uuid.$id);
>>>>>>> f41e45e (.)

        return "tmp/{$key}";
    }
}
