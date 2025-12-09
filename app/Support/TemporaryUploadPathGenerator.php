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
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
     * @param Media $media
     */
    public function getPath($media): string
    {
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'original') . '/';
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'original') . '/';
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'original').'/';
>>>>>>> a12f125f4a (.)
=======
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'original') . '/';
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    /**
     * @param Media $media
     */
    public function getPathForConversions($media): string
    {
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'conversion');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'conversion');
=======
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'conversion');
>>>>>>> a12f125f4a (.)
=======
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'conversion');
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    /**
     * @param Media $media
     */
    public function getPathForResponsiveImages($media): string
    {
<<<<<<< HEAD
        return $this->getBasePath($media) . '/' . md5($media->id . $media->uuid . 'responsive');
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
    }

    /**
     * Get a unique base path for the given media.
     *
<<<<<<< HEAD
     * @param Media $media
=======
<<<<<<< HEAD
     * @param Media $media
=======
     * @param \Modules\Media\Models\Media $media
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
     */
    protected function getBasePath($media): string
    {
        Assert::string($id = $media->getKey());
        $key = md5($media->uuid . $id);

        return "tmp/{$key}";
    }
}
