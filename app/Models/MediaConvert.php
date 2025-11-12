<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Media\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Modules\Media\Database\Factories\MediaConvertFactory;
use Modules\Xot\Contracts\ProfileContract;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> f41e45e (.)
use Illuminate\Support\Carbon;
use Modules\Media\Database\Factories\MediaConvertFactory;
use Modules\Xot\Contracts\ProfileContract;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 5200b63 (.)
=======
>>>>>>> f41e45e (.)

/**
 * @property int $id
 * @property int $media_id
 * @property string|null $codec_video
 * @property string|null $codec_audio
 * @property string|null $preset
 * @property string|null $bitrate
 * @property int|null $width
 * @property int|null $height
 * @property int|null $threads
 * @property int|null $speed
 * @property string|null $percentage
 * @property string|null $remaining
 * @property string|null $rate
 * @property string|null $execution_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property string|null $format
 * @property string|null $converted_file
 * @property string|null $disk
 * @property string|null $file
 * @property Media|null $media
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
 * @method static MediaConvertFactory factory($count = null, $state = [])
 * @method static Builder|MediaConvert newModelQuery()
 * @method static Builder|MediaConvert newQuery()
 * @method static Builder|MediaConvert query()
 * @method static Builder|MediaConvert whereBitrate($value)
 * @method static Builder|MediaConvert whereCodecAudio($value)
 * @method static Builder|MediaConvert whereCodecVideo($value)
 * @method static Builder|MediaConvert whereCreatedAt($value)
 * @method static Builder|MediaConvert whereCreatedBy($value)
 * @method static Builder|MediaConvert whereDeletedAt($value)
 * @method static Builder|MediaConvert whereDeletedBy($value)
 * @method static Builder|MediaConvert whereExecutionTime($value)
 * @method static Builder|MediaConvert whereFormat($value)
 * @method static Builder|MediaConvert whereHeight($value)
 * @method static Builder|MediaConvert whereId($value)
 * @method static Builder|MediaConvert whereMediaId($value)
 * @method static Builder|MediaConvert wherePercentage($value)
 * @method static Builder|MediaConvert wherePreset($value)
 * @method static Builder|MediaConvert whereRate($value)
 * @method static Builder|MediaConvert whereRemaining($value)
 * @method static Builder|MediaConvert whereSpeed($value)
 * @method static Builder|MediaConvert whereThreads($value)
 * @method static Builder|MediaConvert whereUpdatedAt($value)
 * @method static Builder|MediaConvert whereUpdatedBy($value)
 * @method static Builder|MediaConvert whereWidth($value)
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Media\Database\Factories\MediaConvertFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereBitrate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCodecAudio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCodecVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereExecutionTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereMediaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert wherePreset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereRemaining($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereThreads($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaConvert whereWidth($value)
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f41e45e (.)
 * @mixin IdeHelperMediaConvert
=======
>>>>>>> 13d1d7e (.)
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $media_id
 * @property string|null $format
 * @property string|null $codec_video
 * @property string|null $codec_audio
 * @property string|null $preset
 * @property string|null $bitrate
 * @property int|null $width
 * @property int|null $height
 * @property int|null $threads
 * @property int|null $speed
 * @property string|null $percentage
 * @property string|null $remaining
 * @property string|null $rate
 * @property string|null $execution_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read string|null $converted_file
 * @property-read string|null $disk
 * @property-read string|null $file
 * @property-read \Modules\Media\Models\Media|null $media
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Modules\Media\Database\Factories\MediaConvertFactory factory($count = null, $state = [])
 * @method static Builder<static>|MediaConvert newModelQuery()
 * @method static Builder<static>|MediaConvert newQuery()
 * @method static Builder<static>|MediaConvert query()
 * @method static Builder<static>|MediaConvert whereBitrate($value)
 * @method static Builder<static>|MediaConvert whereCodecAudio($value)
 * @method static Builder<static>|MediaConvert whereCodecVideo($value)
 * @method static Builder<static>|MediaConvert whereCreatedAt($value)
 * @method static Builder<static>|MediaConvert whereCreatedBy($value)
 * @method static Builder<static>|MediaConvert whereDeletedAt($value)
 * @method static Builder<static>|MediaConvert whereDeletedBy($value)
 * @method static Builder<static>|MediaConvert whereExecutionTime($value)
 * @method static Builder<static>|MediaConvert whereFormat($value)
 * @method static Builder<static>|MediaConvert whereHeight($value)
 * @method static Builder<static>|MediaConvert whereId($value)
 * @method static Builder<static>|MediaConvert whereMediaId($value)
 * @method static Builder<static>|MediaConvert wherePercentage($value)
 * @method static Builder<static>|MediaConvert wherePreset($value)
 * @method static Builder<static>|MediaConvert whereRate($value)
 * @method static Builder<static>|MediaConvert whereRemaining($value)
 * @method static Builder<static>|MediaConvert whereSpeed($value)
 * @method static Builder<static>|MediaConvert whereThreads($value)
 * @method static Builder<static>|MediaConvert whereUpdatedAt($value)
 * @method static Builder<static>|MediaConvert whereUpdatedBy($value)
 * @method static Builder<static>|MediaConvert whereWidth($value)
=======
 * @mixin IdeHelperMediaConvert
>>>>>>> 2a4b5df (.)
=======
>>>>>>> e28bed7 (.)
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $media_id
 * @property string|null $format
 * @property string|null $codec_video
 * @property string|null $codec_audio
 * @property string|null $preset
 * @property string|null $bitrate
 * @property int|null $width
 * @property int|null $height
 * @property int|null $threads
 * @property int|null $speed
 * @property string|null $percentage
 * @property string|null $remaining
 * @property string|null $rate
 * @property string|null $execution_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read string|null $converted_file
 * @property-read string|null $disk
 * @property-read string|null $file
 * @property-read \Modules\Media\Models\Media|null $media
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Modules\Media\Database\Factories\MediaConvertFactory factory($count = null, $state = [])
 * @method static Builder<static>|MediaConvert newModelQuery()
 * @method static Builder<static>|MediaConvert newQuery()
 * @method static Builder<static>|MediaConvert query()
 * @method static Builder<static>|MediaConvert whereBitrate($value)
 * @method static Builder<static>|MediaConvert whereCodecAudio($value)
 * @method static Builder<static>|MediaConvert whereCodecVideo($value)
 * @method static Builder<static>|MediaConvert whereCreatedAt($value)
 * @method static Builder<static>|MediaConvert whereCreatedBy($value)
 * @method static Builder<static>|MediaConvert whereDeletedAt($value)
 * @method static Builder<static>|MediaConvert whereDeletedBy($value)
 * @method static Builder<static>|MediaConvert whereExecutionTime($value)
 * @method static Builder<static>|MediaConvert whereFormat($value)
 * @method static Builder<static>|MediaConvert whereHeight($value)
 * @method static Builder<static>|MediaConvert whereId($value)
 * @method static Builder<static>|MediaConvert whereMediaId($value)
 * @method static Builder<static>|MediaConvert wherePercentage($value)
 * @method static Builder<static>|MediaConvert wherePreset($value)
 * @method static Builder<static>|MediaConvert whereRate($value)
 * @method static Builder<static>|MediaConvert whereRemaining($value)
 * @method static Builder<static>|MediaConvert whereSpeed($value)
 * @method static Builder<static>|MediaConvert whereThreads($value)
 * @method static Builder<static>|MediaConvert whereUpdatedAt($value)
 * @method static Builder<static>|MediaConvert whereUpdatedBy($value)
 * @method static Builder<static>|MediaConvert whereWidth($value)
=======
 * @mixin IdeHelperMediaConvert
>>>>>>> de4643e (.)
=======
>>>>>>> 0987d27 (.)
 * @mixin \Eloquent
 */
/** */
class MediaConvert extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'media_id',
        'format',
        'codec_video',
        'codec_audio',
        'preset',
        'bitrate',
        'width',
        'height',
        'threads',
        'speed',
        'percentage',
        'remaining',
        'rate',
        'execution_time',
    ];

    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getDiskAttribute(?string $value): ?string
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
    public function getDiskAttribute(null|string $value): null|string
>>>>>>> 5200b63 (.)
=======
    public function getDiskAttribute(?string $value): ?string
>>>>>>> f41e45e (.)
    {
        if ($this->media === null) {
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->media->disk;
=======
        $disk = $media->getAttribute('disk');
        return is_string($disk) ? $disk : null;
>>>>>>> 8bb13d7 (.)
=======

        return $this->media->disk;
>>>>>>> 2a4b5df (.)
=======

        return $this->media->disk;
>>>>>>> de4643e (.)
    }

    public function getFileAttribute(?string $value): ?string
=======
        return $this->media->disk;
    }

    public function getFileAttribute(null|string $value): null|string
>>>>>>> 5200b63 (.)
=======

        return $this->media->disk;
=======
        $disk = $media->getAttribute('disk');
        return is_string($disk) ? $disk : null;
>>>>>>> df262d8 (.)
    }

    public function getFileAttribute(?string $value): ?string
>>>>>>> f41e45e (.)
    {
        if ($this->media === null) {
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->media->path.'/'.$this->media->file_name;
=======
=======
>>>>>>> df262d8 (.)
        $path = $media->getAttribute('path');
        $fileName = $media->getAttribute('file_name');
        if (! is_string($path) || ! is_string($fileName)) {
            return null;
        }
        return $path.'/'.$fileName;
<<<<<<< HEAD
>>>>>>> 8bb13d7 (.)
=======

        return $this->media->path.'/'.$this->media->file_name;
>>>>>>> 2a4b5df (.)
=======

        return $this->media->path.'/'.$this->media->file_name;
>>>>>>> de4643e (.)
    }

    public function getConvertedFileAttribute(?string $value): ?string
=======
        return $this->media->path . '/' . $this->media->file_name;
    }

    public function getConvertedFileAttribute(null|string $value): null|string
>>>>>>> 5200b63 (.)
=======

        return $this->media->path.'/'.$this->media->file_name;
=======
>>>>>>> df262d8 (.)
    }

    public function getConvertedFileAttribute(?string $value): ?string
>>>>>>> f41e45e (.)
    {
        if ($this->media === null) {
            return null;
        }
        $info = pathinfo($this->media->file_name);
        // "dirname" => "."
        // "basename" => "20600550-uhd_3840_2160_30fps.mp4"
        // "extension" => "mp4"
        // "filename" => "20600550-uhd_3840_2160_30fps"

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->media->path.'/conversions/'.$info['filename'].'_'.$this->id.'.'.$this->format;
=======
        return $this->media->path . '/conversions/' . $info['filename'] . '_' . $this->id . '.' . $this->format;
>>>>>>> 5200b63 (.)
=======
        return $this->media->path.'/conversions/'.$info['filename'].'_'.$this->id.'.'.$this->format;
>>>>>>> f41e45e (.)
=======
        return $path.'/conversions/'.$info['filename'].'_'.$this->id.'.'.$format;
>>>>>>> 8bb13d7 (.)
=======
        return $this->media->path.'/conversions/'.$info['filename'].'_'.$this->id.'.'.$this->format;
>>>>>>> 2a4b5df (.)
=======
        return $path.'/conversions/'.$info['filename'].'_'.$this->id.'.'.$format;
>>>>>>> df262d8 (.)
=======
        return $this->media->path.'/conversions/'.$info['filename'].'_'.$this->id.'.'.$this->format;
>>>>>>> de4643e (.)
    }
}
