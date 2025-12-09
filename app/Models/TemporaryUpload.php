<?php

declare(strict_types=1);

namespace Modules\Media\Models;

<<<<<<< HEAD
use Closure;
use Exception;
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Modules\Media\Database\Factories\TemporaryUploadFactory;
use Closure;
use Exception;
use Illuminate\Support\Carbon;
>>>>>>> 5200b63 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Media\Database\Factories\TemporaryUploadFactory;
=======
>>>>>>> 5200b63 (.)
use Modules\Media\Exceptions\CouldNotAddUpload;
use Modules\Media\Exceptions\TemporaryUploadDoesNotBelongToCurrentSession;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
<<<<<<< HEAD
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
>>>>>>> 5200b63 (.)
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
 * @property int|null $media_count
<<<<<<< HEAD
 *
=======
>>>>>>> 5200b63 (.)
 * @method static Builder<static>|TemporaryUpload newModelQuery()
 * @method static Builder<static>|TemporaryUpload newQuery()
 * @method static Builder<static>|TemporaryUpload query()
 * @method static Builder<static>|TemporaryUpload whereCreatedAt($value)
 * @method static Builder<static>|TemporaryUpload whereId($value)
 * @method static Builder<static>|TemporaryUpload whereSessionId($value)
 * @method static Builder<static>|TemporaryUpload whereUpdatedAt($value)
<<<<<<< HEAD
 *
=======
>>>>>>> 5200b63 (.)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_at
 * @property string|null $deleted_by
<<<<<<< HEAD
 *
=======
>>>>>>> 5200b63 (.)
 * @method static Builder<static>|TemporaryUpload whereCreatedBy($value)
 * @method static Builder<static>|TemporaryUpload whereDeletedAt($value)
 * @method static Builder<static>|TemporaryUpload whereDeletedBy($value)
 * @method static Builder<static>|TemporaryUpload whereUpdatedBy($value)
<<<<<<< HEAD
 *
 * @mixin IdeHelperTemporaryUpload
 *
 * @method static TemporaryUploadFactory factory($count = null, $state = [])
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
 * @mixin IdeHelperTemporaryUpload
 * @method static TemporaryUploadFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class TemporaryUpload extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use MassPrunable;

    /**
     * Create a new factory instance for the model.
     *
     * @return TemporaryUploadFactory
     */
    protected static function newFactory(): TemporaryUploadFactory
    {
        return TemporaryUploadFactory::new();
    }

    public static null|Closure $manipulatePreview = null;

    public static null|string $disk = null;
>>>>>>> 5200b63 (.)

    /** @var string */
    protected $connection = 'media';

    /**
     * @var array<string>
     */
    protected $guarded = [];

<<<<<<< HEAD
    public static function findByMediaUuid(?string $mediaUuid): ?self
=======
    public static function findByMediaUuid(null|string $mediaUuid): null|self
>>>>>>> 5200b63 (.)
    {
        Assert::string($mediaModelClass = config('media-library.media_model'));

        /**
<<<<<<< HEAD
         * @var Media|null $media
         *
         * @phpstan-ignore-next-line
         */
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();

        if (! $media) {
=======
         * @var Media $media
         */
        $media = $mediaModelClass::query()->where('uuid', $mediaUuid)->first();

        if (!$media) {
>>>>>>> 5200b63 (.)
            return null;
        }

        $temporaryUpload = $media->model;

<<<<<<< HEAD
        if (! ($temporaryUpload instanceof self)) {
=======
        if (!($temporaryUpload instanceof self)) {
>>>>>>> 5200b63 (.)
            return null;
        }

        return $temporaryUpload;
    }

<<<<<<< HEAD
    public static function findByMediaUuidInCurrentSession(?string $mediaUuid): ?self
    {
        if (! (($temporaryUpload = static::findByMediaUuid($mediaUuid)) instanceof self)) {
=======
    public static function findByMediaUuidInCurrentSession(null|string $mediaUuid): null|self
    {
        if (!(($temporaryUpload = static::findByMediaUuid($mediaUuid)) instanceof self)) {
>>>>>>> 5200b63 (.)
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
    public function registerMediaConversions(?Media $media = null): void
    {
        if (! config('media-library.generate_thumbnails_for_temporary_uploads')) {
=======
    public function registerMediaConversions(null|Media $media = null): void
    {
        if (!config('media-library.generate_thumbnails_for_temporary_uploads')) {
>>>>>>> 5200b63 (.)
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
        Assert::isInstanceOf($media, Media::class, '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::isInstanceOf($media, Media::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5200b63 (.)

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
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> 5200b63 (.)
    }

    // public function prunable(): Builder
    // { Call to an undefined method Illuminate\Database\Eloquent\Builder<Modules\Media\Models\TemporaryUpload>::old().
    //    return self::query()->old();
    // }

    protected function getPreviewManipulation(): Closure
    {
<<<<<<< HEAD
        return
=======
        return (
>>>>>>> 5200b63 (.)
            static::$manipulatePreview ?? function (Conversion $conversion): void {
                $conversion->fit(Fit::Crop, 300, 300);

                // $conversion->fit('crop', 300, 300);
<<<<<<< HEAD
            };
=======
            }
        );
>>>>>>> 5200b63 (.)
    }
}
