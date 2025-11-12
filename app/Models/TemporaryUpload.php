<?php

declare(strict_types=1);

namespace Modules\Media\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
use Exception;
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Modules\Media\Database\Factories\TemporaryUploadFactory;
use Closure;
use Exception;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
<<<<<<< HEAD
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
use Closure;
use Exception;
>>>>>>> f41e45e (.)
=======
>>>>>>> 13d1d7e (.)
=======
use Closure;
use Exception;
>>>>>>> 2a4b5df (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Media\Database\Factories\TemporaryUploadFactory;
=======
>>>>>>> 5200b63 (.)
=======
use Illuminate\Support\Carbon;
use Modules\Media\Database\Factories\TemporaryUploadFactory;
>>>>>>> f41e45e (.)
use Modules\Media\Exceptions\CouldNotAddUpload;
use Modules\Media\Exceptions\TemporaryUploadDoesNotBelongToCurrentSession;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
>>>>>>> 5200b63 (.)
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> f41e45e (.)
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Webmozart\Assert\Assert;

/**
 * Modules\Media\Models\TemporaryUpload.
 *
 * @property int $id
 * @property string $session_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property MediaCollection<int, Media> $media
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int|null $media_count
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property int|null                    $media_count
<<<<<<< HEAD
>>>>>>> 13d1d7e (.)
 *
=======
>>>>>>> 5200b63 (.)
=======
 *
>>>>>>> f41e45e (.)
=======
>>>>>>> fbf6035 (.)
=======
 * @property int|null $media_count
 *
>>>>>>> 2a4b5df (.)
 * @method static Builder<static>|TemporaryUpload newModelQuery()
 * @method static Builder<static>|TemporaryUpload newQuery()
 * @method static Builder<static>|TemporaryUpload query()
 * @method static Builder<static>|TemporaryUpload whereCreatedAt($value)
 * @method static Builder<static>|TemporaryUpload whereId($value)
 * @method static Builder<static>|TemporaryUpload whereSessionId($value)
 * @method static Builder<static>|TemporaryUpload whereUpdatedAt($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 5200b63 (.)
=======
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $media
 * @property int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TemporaryUpload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TemporaryUpload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TemporaryUpload query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TemporaryUpload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TemporaryUpload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TemporaryUpload whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TemporaryUpload whereUpdatedAt($value)
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
 *
>>>>>>> f41e45e (.)
=======
>>>>>>> fbf6035 (.)
=======
 *
>>>>>>> 2a4b5df (.)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_at
 * @property string|null $deleted_by
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 5200b63 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
 *
>>>>>>> f41e45e (.)
=======
>>>>>>> fbf6035 (.)
=======
 *
>>>>>>> 2a4b5df (.)
 * @method static Builder<static>|TemporaryUpload whereCreatedBy($value)
 * @method static Builder<static>|TemporaryUpload whereDeletedAt($value)
 * @method static Builder<static>|TemporaryUpload whereDeletedBy($value)
 * @method static Builder<static>|TemporaryUpload whereUpdatedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a4b5df (.)
 *
 * @mixin IdeHelperTemporaryUpload
 *
 * @method static TemporaryUploadFactory factory($count = null, $state = [])
<<<<<<< HEAD
=======
 * @method static TemporaryUploadFactory          factory($count = null, $state = [])
<<<<<<< HEAD
>>>>>>> 13d1d7e (.)
 *
 * @mixin \Eloquent
 */
class TemporaryUpload extends BaseModel implements HasMedia
{
    use \Modules\Xot\Models\Traits\HasXotFactory;
    use InteractsWithMedia;
    use MassPrunable;

   

    public static ?Closure $manipulatePreview = null;

    public static ?string $disk = null;
=======
=======
 *
>>>>>>> f41e45e (.)
 * @mixin IdeHelperTemporaryUpload
 *
 * @method static TemporaryUploadFactory factory($count = null, $state = [])
 *
=======
>>>>>>> fbf6035 (.)
=======
 *
>>>>>>> 2a4b5df (.)
 * @mixin \Eloquent
 */
class TemporaryUpload extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use MassPrunable;

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): TemporaryUploadFactory
    {
        return TemporaryUploadFactory::new();
    }

    public static ?Closure $manipulatePreview = null;

<<<<<<< HEAD
    public static null|string $disk = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static null|Closure $manipulatePreview = null;

    public static null|string $disk = null;
>>>>>>> 47a54fe (.)
=======
    public static ?Closure $manipulatePreview = null;

    public static ?string $disk = null;
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 47a54fe (.)
=======
    public static null|Closure $manipulatePreview = null;

    public static null|string $disk = null;
<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
     * @return \Modules\Media\Database\Factories\TemporaryUploadFactory
     */
    protected static function newFactory(): \Modules\Media\Database\Factories\TemporaryUploadFactory
    {
        return \Modules\Media\Database\Factories\TemporaryUploadFactory::new();
    }

    public static ?\Closure $manipulatePreview = null;

    public static ?string $disk = null;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
    public static ?string $disk = null;
>>>>>>> f41e45e (.)

    /** @var string */
    protected $connection = 'media';

    /**
     * @var array<string>
     */
    protected $guarded = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function findByMediaUuid(?string $mediaUuid): ?self
=======
    public static function findByMediaUuid(null|string $mediaUuid): null|self
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
    public static function findByMediaUuid(null|string $mediaUuid): null|self
=======
    public static function findByMediaUuid(?string $mediaUuid): ?self
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public static function findByMediaUuid(null|string $mediaUuid): null|self
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    public static function findByMediaUuid(null|string $mediaUuid): null|self
>>>>>>> a80d398 (.)
=======
    public static function findByMediaUuid(null|string $mediaUuid): null|self
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function findByMediaUuid(null|string $mediaUuid): null|self
=======
    public static function findByMediaUuid(?string $mediaUuid): ?self
>>>>>>> a12f125f4a (.)
=======
    public static function findByMediaUuid(null|string $mediaUuid): null|self
>>>>>>> b93ef594b4 (.)
=======
    public static function findByMediaUuid(?string $mediaUuid): ?self
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
    public static function findByMediaUuid(null|string $mediaUuid): null|self
>>>>>>> f1c6d6e (.)
=======
    public static function findByMediaUuid(?string $mediaUuid): ?self
>>>>>>> f41e45e (.)
    {
        Assert::string($mediaModelClass = config('media-library.media_model'));

<<<<<<< HEAD
<<<<<<< HEAD
        /**
<<<<<<< HEAD
         * @var Media|null $media
         *
         * @phpstan-ignore-next-line
         */
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();
=======
        $query = $mediaModelClass::query();
        if (is_object($query) && method_exists($query, 'where')) {
            $query = $query->where('uuid', $mediaUuid);
        }
        if (is_object($query) && method_exists($query, 'first')) {
            $media = $query->first();
        } else {
            $media = null;
        }
>>>>>>> 13d1d7e (.)
=======
        /**
         * @var Media $media
         */
<<<<<<< HEAD
<<<<<<< HEAD
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();
>>>>>>> 2a4b5df (.)

        if (! $media) {
=======
         * @var Media $media
         */
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();

<<<<<<< HEAD
        if (!$media) {
<<<<<<< HEAD
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
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();

        if (!$media) {
=======
=======
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
        $media = $mediaModelClass::query()
            ->where('uuid', $mediaUuid)
            ->first();

        if (! $media) {
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
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();

        if (!$media) {
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
=======
        if (! $media) {
>>>>>>> f41e45e (.)
=======
        $query = $mediaModelClass::query();

        /** @var Media|null $media */
        $media = $query->where('uuid', $mediaUuid)->first();

        if ($media === null) {
>>>>>>> 1634e53 (.)
=======
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();

        if (! $media) {
>>>>>>> 21a9aec (.)
            return null;
        }

        $temporaryUpload = $media->model;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($temporaryUpload instanceof self)) {
=======
        if (!($temporaryUpload instanceof self)) {
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        if (!($temporaryUpload instanceof self)) {
=======
        if (! $temporaryUpload instanceof self) {
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        if (!($temporaryUpload instanceof self)) {
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        if (!($temporaryUpload instanceof self)) {
>>>>>>> a80d398 (.)
=======
        if (!($temporaryUpload instanceof self)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($temporaryUpload instanceof self)) {
=======
        if (! $temporaryUpload instanceof self) {
>>>>>>> a12f125f4a (.)
=======
        if (!($temporaryUpload instanceof self)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! $temporaryUpload instanceof self) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
        if (!($temporaryUpload instanceof self)) {
>>>>>>> f1c6d6e (.)
=======
        if (! ($temporaryUpload instanceof self)) {
>>>>>>> f41e45e (.)
            return null;
        }

        return $temporaryUpload;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function findByMediaUuidInCurrentSession(?string $mediaUuid): ?self
    {
        if (! (($temporaryUpload = static::findByMediaUuid($mediaUuid)) instanceof self)) {
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
=======
>>>>>>> f1c6d6e (.)
    public static function findByMediaUuidInCurrentSession(null|string $mediaUuid): null|self
    {
        if (!(($temporaryUpload = static::findByMediaUuid($mediaUuid)) instanceof self)) {
>>>>>>> 5200b63 (.)
=======
    public static function findByMediaUuidInCurrentSession(?string $mediaUuid): ?self
    {
        if (! (($temporaryUpload = static::findByMediaUuid($mediaUuid)) instanceof self)) {
>>>>>>> f41e45e (.)
            return null;
        }

        if (
            config('media-library.enable_temporary_uploads_session_affinity', true) &&
                $temporaryUpload->session_id !== session()->getId()
        ) {
            return null;
        }

        return $temporaryUpload;
    }

    public static function createForFile(
        UploadedFile $uploadedFile,
        string $sessionId,
        string $uuid,
        string $name,
    ): self {
        /**
         * @var TemporaryUpload $temporaryUpload
         */
        $temporaryUpload = static::create([
            'session_id' => $sessionId,
        ]);

        if (static::findByMediaUuid($uuid) instanceof self) {
            throw CouldNotAddUpload::uuidAlreadyExists();
        }

        $temporaryUpload
            ->addMedia($uploadedFile)
            ->setName($name)
            ->withProperties(['uuid' => $uuid])
            ->toMediaCollection('default', static::getDiskName());
        // Debugbar::info('TemporaruUpload UUID', $uuid);
        $temporaryUpload->fresh();

        return $temporaryUpload;
    }

    public static function createForRemoteFile(
        string $file,
        string $sessionId,
        string $uuid,
        string $name,
        string $diskName,
    ): self {
        /**
         * @var TemporaryUpload $temporaryUpload
         */
        $temporaryUpload = static::create([
            'session_id' => $sessionId,
        ]);

        if (static::findByMediaUuid($uuid) instanceof self) {
            throw CouldNotAddUpload::uuidAlreadyExists();
        }

        $temporaryUpload
            ->addMediaFromDisk($file, $diskName)
            ->setName($name)
            ->usingFileName($name)
            ->withProperties(['uuid' => $uuid])
            ->toMediaCollection('default', static::getDiskName());

        $temporaryUpload->fresh();

        return $temporaryUpload;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function registerMediaConversions(?Media $media = null): void
    {
        if (! config('media-library.generate_thumbnails_for_temporary_uploads')) {
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
=======
>>>>>>> f1c6d6e (.)
    public function registerMediaConversions(null|Media $media = null): void
    {
        if (!config('media-library.generate_thumbnails_for_temporary_uploads')) {
>>>>>>> 5200b63 (.)
=======
    public function registerMediaConversions(?Media $media = null): void
    {
        if (! config('media-library.generate_thumbnails_for_temporary_uploads')) {
>>>>>>> f41e45e (.)
            return;
        }

        $conversion = $this->addMediaConversion('preview')->nonQueued();

        $previewManipulation = $this->getPreviewManipulation();

        $previewManipulation($conversion);
    }

    public function moveMedia(HasMedia $hasMedia, string $collectionName, string $diskName, string $fileName): Media
    {
        if (
            config('media-library.enable_temporary_uploads_session_affinity', true) &&
                $this->session_id !== session()->getId()
        ) {
            throw TemporaryUploadDoesNotBelongToCurrentSession::create();
        }

        $media = $this->getFirstMedia();

        // if (! $media instanceof \Spatie\MediaLibrary\MediaCollections\Models\Media) {
        //    throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        // }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isInstanceOf($media, Media::class, '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::isInstanceOf($media, Media::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> a80d398 (.)
=======
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::isInstanceOf($media, Media::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::isInstanceOf($media, Media::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> f1c6d6e (.)
=======
        Assert::isInstanceOf($media, Media::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f41e45e (.)

        $temporaryUploadModel = $media->model;
        $uuid = $media->uuid;

        $newMedia = $media->move($hasMedia, $collectionName, $diskName, $fileName);

        $temporaryUploadModel?->delete();

        $newMedia->update(['uuid' => $uuid]);

        return $newMedia;
    }

    protected static function getDiskName(): string
    {
        $res = static::$disk ?? config('media-library.disk_name');
        if (\is_string($res)) {
            return $res;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> a80d398 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> a12f125f4a (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> b93ef594b4 (.)
=======
        throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> f1c6d6e (.)
=======
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> f41e45e (.)
=======
        throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> 13d1d7e (.)
=======
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> 2a4b5df (.)
    }

    // public function prunable(): Builder
    // { Call to an undefined method Illuminate\Database\Eloquent\Builder<Modules\Media\Models\TemporaryUpload>::old().
    //    return self::query()->old();
    // }

    protected function getPreviewManipulation(): Closure
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return
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
    protected function getPreviewManipulation(): Closure
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        return (
>>>>>>> 5200b63 (.)
=======
        return
>>>>>>> f41e45e (.)
            static::$manipulatePreview ?? function (Conversion $conversion): void {
                $conversion->fit(Fit::Crop, 300, 300);

                // $conversion->fit('crop', 300, 300);
<<<<<<< HEAD
<<<<<<< HEAD
            };
=======
            }
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
=======
=======
<<<<<<< HEAD
=======
=======
    protected function getPreviewManipulation(): \Closure
    {
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
        return static::$manipulatePreview ?? function (Conversion $conversion): void {
            $conversion->fit(Fit::Crop, 300, 300);
            // $conversion->fit('crop', 300, 300);
        };
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
            };
>>>>>>> f41e45e (.)
    }
}
