<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Infolists;

<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
=======
use Throwable;
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
<<<<<<< HEAD
use Closure;
use Throwable;
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
use Filament\Infolists\Components\Entry;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\ComponentAttributeBag;
use League\Flysystem\UnableToCheckFileExistence;
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> 5200b63 (.)
use Webmozart\Assert\Assert;

class VideoEntry extends Entry
{
    /**
     * @var view-string
     */
    protected string $view = 'media::filament.infolists.video-entry';

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    protected string|Closure|null $disk = null;

    protected int|string|Closure|null $height = null;

    protected bool|Closure $isCircular = false;

    protected bool|Closure $isSquare = false;

    protected string|Closure $visibility = 'public';

    protected int|string|Closure|null $width = null;

    /**
     * @var array<mixed>|Closure
     */
    protected array|Closure $extraImgAttributes = [];

    protected string|Closure|null $defaultImageUrl = null;

    protected bool|Closure $isStacked = false;

    protected int|Closure|null $overlap = null;

    protected int|string|Closure|null $ring = null;

    protected int|Closure|null $limit = null;

    protected bool|Closure $hasLimitedRemainingText = false;

    protected bool|Closure $isLimitedRemainingTextSeparate = false;

    protected string|Closure|null $limitedRemainingTextSize = null;

    protected bool|Closure $shouldCheckFileExistence = true;

    public function disk(string|Closure|null $disk): static
<<<<<<< HEAD
=======
=======
    protected string|\Closure|null $disk = null;

    protected int|string|\Closure|null $height = null;

    protected bool|\Closure $isCircular = false;

    protected bool|\Closure $isSquare = false;

    protected string|\Closure $visibility = 'public';

    protected int|string|\Closure|null $width = null;

    /**
     * @var array<mixed>|\Closure
     */
    protected array|\Closure $extraImgAttributes = [];

    protected string|\Closure|null $defaultImageUrl = null;

    protected bool|\Closure $isStacked = false;

    protected int|\Closure|null $overlap = null;

    protected int|string|\Closure|null $ring = null;

    protected int|\Closure|null $limit = null;

    protected bool|\Closure $hasLimitedRemainingText = false;

    protected bool|\Closure $isLimitedRemainingTextSeparate = false;

    protected string|\Closure|null $limitedRemainingTextSize = null;

    protected bool|\Closure $shouldCheckFileExistence = true;

    public function disk(string|\Closure|null $disk): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->disk = $disk;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

<<<<<<< HEAD
    public function height(int|string|Closure|null $height): static
=======
<<<<<<< HEAD
    public function height(int|string|Closure|null $height): static
=======
    public function height(int|string|\Closure|null $height): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->height = $height;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

<<<<<<< HEAD
    public function circular(bool|Closure $condition = true): static
=======
<<<<<<< HEAD
    public function circular(bool|Closure $condition = true): static
=======
    public function circular(bool|\Closure $condition = true): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->isCircular = $condition;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

<<<<<<< HEAD
    public function square(bool|Closure $condition = true): static
=======
<<<<<<< HEAD
    public function square(bool|Closure $condition = true): static
=======
    public function square(bool|\Closure $condition = true): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->isSquare = $condition;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

<<<<<<< HEAD
    public function size(int|string|Closure $size): static
=======
<<<<<<< HEAD
    public function size(int|string|Closure $size): static
=======
    public function size(int|string|\Closure $size): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->width($size);
        $this->height($size);
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

<<<<<<< HEAD
    public function visibility(string|Closure $visibility): static
=======
<<<<<<< HEAD
    public function visibility(string|Closure $visibility): static
=======
    public function visibility(string|\Closure $visibility): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->visibility = $visibility;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

<<<<<<< HEAD
    public function width(int|string|Closure|null $width): static
=======
<<<<<<< HEAD
    public function width(int|string|Closure|null $width): static
=======
    public function width(int|string|\Closure|null $width): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->width = $width;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    public function getDisk(): Filesystem
    {
        return Storage::disk($this->getDiskName());
    }

    public function getDiskName(): string
    {
        Assert::string($res = $this->evaluate($this->disk) ?? config('filament.default_filesystem_disk'));
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $res;
    }

    /**
     * Get the height value for the video entry.
     *
     * @return string|null The height value as a string (with 'px' suffix if it was an integer) or null if not set
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getHeight(): ?string
=======
    public function getHeight(): null|string
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
    public function getHeight(): null|string
=======
    public function getHeight(): ?string
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function getHeight(): null|string
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    public function getHeight(): null|string
>>>>>>> a80d398 (.)
=======
    public function getHeight(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getHeight(): null|string
=======
    public function getHeight(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getHeight(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getHeight(): ?string
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
    {
        $height = $this->evaluate($this->height);

        if ($height === null) {
            return null;
        }

        if (is_int($height)) {
            return "{$height}px";
        }

        // Convert to string to ensure consistent return type
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        if (is_scalar($height) || is_object($height) && method_exists($height, '__toString')) {
            return is_string($height) ? $height : ((string) $height);
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (is_scalar($height) || (is_object($height) && method_exists($height, '__toString'))) {
            return is_string($height) ? $height : (string) $height;
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (is_scalar($height) || is_object($height) && method_exists($height, '__toString')) {
            return is_string($height) ? $height : ((string) $height);
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        // If we can't convert to string, return null
        return null;
    }

<<<<<<< HEAD
    public function defaultImageUrl(string|Closure|null $url): static
=======
<<<<<<< HEAD
    public function defaultImageUrl(string|Closure|null $url): static
=======
    public function defaultImageUrl(string|\Closure|null $url): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->defaultImageUrl = $url;
<<<<<<< HEAD

        return $this;
    }

    public function getImageUrl(?string $state = null): ?string
=======
        return $this;
    }

<<<<<<< HEAD
    public function getImageUrl(null|string $state = null): null|string
>>>>>>> 5200b63 (.)
    {
        if (filter_var($state, FILTER_VALIDATE_URL) !== false || str($state)->startsWith('data:')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getImageUrl(null|string $state = null): null|string
    {
        if (filter_var($state, FILTER_VALIDATE_URL) !== false || str($state)->startsWith('data:')) {
=======
    public function getImageUrl(?string $state = null): ?string
    {
        if ((filter_var($state, FILTER_VALIDATE_URL) !== false) || str($state)->startsWith('data:')) {
>>>>>>> a12f125f4a (.)
=======
    public function getImageUrl(null|string $state = null): null|string
    {
        if (filter_var($state, FILTER_VALIDATE_URL) !== false || str($state)->startsWith('data:')) {
>>>>>>> b93ef594b4 (.)
=======
    public function getImageUrl(?string $state = null): ?string
    {
        if ((filter_var($state, FILTER_VALIDATE_URL) !== false) || str($state)->startsWith('data:')) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            return $state;
        }
        if ($state === null) {
            return null;
        }

        /** @var FilesystemAdapter $storage */
        $storage = $this->getDisk();

        if ($this->shouldCheckFileExistence()) {
            try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (! $storage->exists($state)) {
=======
                if (!$storage->exists($state)) {
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
                if (!$storage->exists($state)) {
=======
                if (! $storage->exists($state)) {
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
                if (!$storage->exists($state)) {
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
                if (!$storage->exists($state)) {
>>>>>>> a80d398 (.)
=======
                if (!$storage->exists($state)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (!$storage->exists($state)) {
=======
                if (! $storage->exists($state)) {
>>>>>>> a12f125f4a (.)
=======
                if (!$storage->exists($state)) {
>>>>>>> b93ef594b4 (.)
=======
                if (! $storage->exists($state)) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
                    return null;
                }
            } catch (UnableToCheckFileExistence) {
                return null;
            }
        }

        if ($this->getVisibility() === 'private') {
            try {
<<<<<<< HEAD
                return $storage->temporaryUrl($state, now()->addMinutes(5));
            } catch (Throwable) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                return $storage->temporaryUrl($state, now()->addMinutes(5));
=======
=======
>>>>>>> origin/develop
                return $storage->temporaryUrl(
                    $state,
                    now()->addMinutes(5)
                );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                return $storage->temporaryUrl($state, now()->addMinutes(5));
>>>>>>> b93ef594b4 (.)
            } catch (Throwable) {
=======
            } catch (\Throwable) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                // This driver does not support creating temporary URLs.
            }
        }

        return $storage->url($state);
    }

    /**
     * Get the default image URL for the video entry.
     *
     * @return string|null The default image URL or null if not set
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getDefaultImageUrl(): ?string
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
    public function getDefaultImageUrl(): null|string
>>>>>>> 5200b63 (.)
    {
        $url = $this->evaluate($this->defaultImageUrl);

        if ($url === null) {
            return null;
        }

        if (is_scalar($url) || is_object($url) && method_exists($url, '__toString')) {
            return is_string($url) ? $url : ((string) $url);
        }

<<<<<<< HEAD
=======
=======
    public function getDefaultImageUrl(): ?string
=======
    public function getDefaultImageUrl(): null|string
>>>>>>> b93ef594b4 (.)
    {
        $url = $this->evaluate($this->defaultImageUrl);

        if ($url === null) {
            return null;
        }

        if (is_scalar($url) || is_object($url) && method_exists($url, '__toString')) {
            return is_string($url) ? $url : ((string) $url);
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    public function getDefaultImageUrl(): ?string
    {
        $url = $this->evaluate($this->defaultImageUrl);
        
        if ($url === null) {
            return null;
        }
        
        if (is_scalar($url) || (is_object($url) && method_exists($url, '__toString'))) {
            return is_string($url) ? $url : (string) $url;
        }
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        return null;
    }

    /**
     * Get the visibility value for the video entry.
     *
     * @return string The visibility setting
     */
    public function getVisibility(): string
    {
        $visibility = $this->evaluate($this->visibility);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)

        if (is_scalar($visibility) || is_object($visibility) && method_exists($visibility, '__toString')) {
            return is_string($visibility) ? $visibility : ((string) $visibility);
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        if (is_scalar($visibility) || (is_object($visibility) && method_exists($visibility, '__toString'))) {
            return is_string($visibility) ? $visibility : (string) $visibility;
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        if (is_scalar($visibility) || is_object($visibility) && method_exists($visibility, '__toString')) {
            return is_string($visibility) ? $visibility : ((string) $visibility);
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        // Default to public if invalid value
        return 'public';
    }

    /**
     * Get the width value for the video entry.
     *
     * @return string|null The width value as a string (with 'px' suffix if it was an integer) or null if not set
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getWidth(): ?string
=======
    public function getWidth(): null|string
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
    public function getWidth(): null|string
=======
    public function getWidth(): ?string
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function getWidth(): null|string
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    public function getWidth(): null|string
>>>>>>> a80d398 (.)
=======
    public function getWidth(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getWidth(): null|string
=======
    public function getWidth(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getWidth(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getWidth(): ?string
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
    {
        $width = $this->evaluate($this->width);

        if ($width === null) {
            return null;
        }

        if (is_int($width)) {
            return "{$width}px";
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        if (is_scalar($width) || is_object($width) && method_exists($width, '__toString')) {
            return is_string($width) ? $width : ((string) $width);
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (is_scalar($width) || (is_object($width) && method_exists($width, '__toString'))) {
            return is_string($width) ? $width : (string) $width;
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (is_scalar($width) || is_object($width) && method_exists($width, '__toString')) {
            return is_string($width) ? $width : ((string) $width);
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        return null;
    }

    public function isCircular(): bool
    {
        return (bool) $this->evaluate($this->isCircular);
    }

    public function isSquare(): bool
    {
        return (bool) $this->evaluate($this->isSquare);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<mixed>|Closure  $attributes
=======
=======
>>>>>>> 47a54fe (.)
     * @param array<mixed>|Closure $attributes
>>>>>>> 5200b63 (.)
     */
    public function extraImgAttributes(array|Closure $attributes): static
=======
<<<<<<< HEAD
     * @param array<mixed>|Closure $attributes
     */
    public function extraImgAttributes(array|Closure $attributes): static
=======
     * @param  array<mixed>|\Closure  $attributes
     */
    public function extraImgAttributes(array|\Closure $attributes): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->extraImgAttributes = $attributes;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    /**
     * @return array<mixed>
     */
    public function getExtraImgAttributes(): array
    {
        $attributes = $this->evaluate($this->extraImgAttributes);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)

        if (is_array($attributes)) {
            return $attributes;
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        if (is_array($attributes)) {
            return $attributes;
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        if (is_array($attributes)) {
            return $attributes;
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        // Return empty array if invalid value
        return [];
    }

    public function getExtraImgAttributeBag(): ComponentAttributeBag
    {
        return new ComponentAttributeBag($this->getExtraImgAttributes());
    }

<<<<<<< HEAD
    public function stacked(bool|Closure $condition = true): static
=======
<<<<<<< HEAD
    public function stacked(bool|Closure $condition = true): static
=======
    public function stacked(bool|\Closure $condition = true): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->isStacked = $condition;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    public function isStacked(): bool
    {
        return (bool) $this->evaluate($this->isStacked);
    }

<<<<<<< HEAD
    public function overlap(int|Closure|null $overlap): static
=======
<<<<<<< HEAD
    public function overlap(int|Closure|null $overlap): static
=======
    public function overlap(int|\Closure|null $overlap): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->overlap = $overlap;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    /**
     * Get the overlap value for the video entry.
     *
     * @return int|null The overlap value or null if not set
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getOverlap(): ?int
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
    public function getOverlap(): null|int
>>>>>>> 5200b63 (.)
    {
        $overlap = $this->evaluate($this->overlap);

        if ($overlap === null) {
            return null;
        }

        if (is_numeric($overlap)) {
            return (int) $overlap;
        }

<<<<<<< HEAD
=======
=======
    public function getOverlap(): ?int
=======
    public function getOverlap(): null|int
>>>>>>> b93ef594b4 (.)
    {
        $overlap = $this->evaluate($this->overlap);

        if ($overlap === null) {
            return null;
        }

        if (is_numeric($overlap)) {
            return (int) $overlap;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        return null;
    }

    public function ring(string|int|Closure|null $ring): static
<<<<<<< HEAD
=======
=======
    public function getOverlap(): ?int
    {
        $overlap = $this->evaluate($this->overlap);
        
        if ($overlap === null) {
            return null;
        }
        
        if (is_numeric($overlap)) {
            return (int) $overlap;
        }
        
        return null;
    }

    public function ring(string|int|\Closure|null $ring): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->ring = $ring;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    /**
     * Get the ring value for the video entry.
     *
     * @return int|null The ring value or null if not set
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getRing(): ?int
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
    public function getRing(): null|int
>>>>>>> 5200b63 (.)
    {
        $ring = $this->evaluate($this->ring);

        if ($ring === null) {
            return null;
        }

        if (is_numeric($ring)) {
            return (int) $ring;
        }

<<<<<<< HEAD
=======
=======
    public function getRing(): ?int
=======
    public function getRing(): null|int
>>>>>>> b93ef594b4 (.)
    {
        $ring = $this->evaluate($this->ring);

        if ($ring === null) {
            return null;
        }

        if (is_numeric($ring)) {
            return (int) $ring;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        return null;
    }

    public function limit(int|Closure|null $limit = 3): static
<<<<<<< HEAD
=======
=======
    public function getRing(): ?int
    {
        $ring = $this->evaluate($this->ring);
        
        if ($ring === null) {
            return null;
        }
        
        if (is_numeric($ring)) {
            return (int) $ring;
        }
        
        return null;
    }

    public function limit(int|\Closure|null $limit = 3): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->limit = $limit;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    /**
     * Get the limit value for the video entry.
     *
     * @return int|null The limit value or null if not set
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLimit(): ?int
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
    public function getLimit(): null|int
>>>>>>> 5200b63 (.)
    {
        $limit = $this->evaluate($this->limit);

        if ($limit === null) {
            return null;
        }

        if (is_numeric($limit)) {
            return (int) $limit;
        }

        return null;
    }

    public function limitedRemainingText(
        bool|Closure $condition = true,
        bool|Closure $isSeparate = false,
        string|Closure|null $size = null,
    ): static {
<<<<<<< HEAD
=======
=======
    public function getLimit(): ?int
=======
    public function getLimit(): null|int
>>>>>>> b93ef594b4 (.)
    {
        $limit = $this->evaluate($this->limit);

        if ($limit === null) {
            return null;
        }

        if (is_numeric($limit)) {
            return (int) $limit;
        }

        return null;
    }

<<<<<<< HEAD
    public function limitedRemainingText(bool|Closure $condition = true, bool|Closure $isSeparate = false, string|Closure|null $size = null): static
    {
>>>>>>> a12f125f4a (.)
=======
    public function limitedRemainingText(
        bool|Closure $condition = true,
        bool|Closure $isSeparate = false,
        string|Closure|null $size = null,
    ): static {
>>>>>>> b93ef594b4 (.)
=======
    public function getLimit(): ?int
    {
        $limit = $this->evaluate($this->limit);
        
        if ($limit === null) {
            return null;
        }
        
        if (is_numeric($limit)) {
            return (int) $limit;
        }
        
        return null;
    }

    public function limitedRemainingText(bool|\Closure $condition = true, bool|\Closure $isSeparate = false, string|\Closure|null $size = null): static
    {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        $this->hasLimitedRemainingText = $condition;
        $this->limitedRemainingTextSeparate($isSeparate);
        $this->limitedRemainingTextSize($size);
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

<<<<<<< HEAD
    public function limitedRemainingTextSeparate(bool|Closure $condition = true): static
=======
<<<<<<< HEAD
    public function limitedRemainingTextSeparate(bool|Closure $condition = true): static
=======
    public function limitedRemainingTextSeparate(bool|\Closure $condition = true): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->isLimitedRemainingTextSeparate = $condition;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    public function hasLimitedRemainingText(): bool
    {
        return (bool) $this->evaluate($this->hasLimitedRemainingText);
    }

    public function isLimitedRemainingTextSeparate(): bool
    {
        return (bool) $this->evaluate($this->isLimitedRemainingTextSeparate);
    }

<<<<<<< HEAD
    public function limitedRemainingTextSize(string|Closure|null $size): static
=======
<<<<<<< HEAD
    public function limitedRemainingTextSize(string|Closure|null $size): static
=======
    public function limitedRemainingTextSize(string|\Closure|null $size): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->limitedRemainingTextSize = $size;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    /**
     * Get the limited remaining text size for the video entry.
     *
     * @return string|null The text size or null if not set
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLimitedRemainingTextSize(): ?string
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
    public function getLimitedRemainingTextSize(): null|string
>>>>>>> 5200b63 (.)
    {
        $size = $this->evaluate($this->limitedRemainingTextSize);

        if ($size === null) {
            return null;
        }

        if (is_scalar($size) || is_object($size) && method_exists($size, '__toString')) {
            return is_string($size) ? $size : ((string) $size);
        }

<<<<<<< HEAD
=======
=======
    public function getLimitedRemainingTextSize(): ?string
=======
    public function getLimitedRemainingTextSize(): null|string
>>>>>>> b93ef594b4 (.)
    {
        $size = $this->evaluate($this->limitedRemainingTextSize);

        if ($size === null) {
            return null;
        }

        if (is_scalar($size) || is_object($size) && method_exists($size, '__toString')) {
            return is_string($size) ? $size : ((string) $size);
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        return null;
    }

    public function checkFileExistence(bool|Closure $condition = true): static
<<<<<<< HEAD
=======
=======
    public function getLimitedRemainingTextSize(): ?string
    {
        $size = $this->evaluate($this->limitedRemainingTextSize);
        
        if ($size === null) {
            return null;
        }
        
        if (is_scalar($size) || (is_object($size) && method_exists($size, '__toString'))) {
            return is_string($size) ? $size : (string) $size;
        }
        
        return null;
    }

    public function checkFileExistence(bool|\Closure $condition = true): static
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        $this->shouldCheckFileExistence = $condition;
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
        return $this;
    }

    public function shouldCheckFileExistence(): bool
    {
        return (bool) $this->evaluate($this->shouldCheckFileExistence);
    }
}
