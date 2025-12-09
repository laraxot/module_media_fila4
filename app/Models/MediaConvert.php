<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Media\Models;

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
use Illuminate\Support\Carbon;
use Modules\Media\Database\Factories\MediaConvertFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 5200b63 (.)

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
 * @property string|null $deleted_by
 * @property string|null $format
 * @property string|null $converted_file
 * @property string|null $disk
 * @property string|null $file
 * @property Media|null $media
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
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
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
 * @mixin IdeHelperMediaConvert
 * @mixin \Eloquent
 */
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
    public function getDiskAttribute(null|string $value): null|string
>>>>>>> 5200b63 (.)
    {
        if ($this->media === null) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getDiskAttribute(null|string $value): null|string
    {
        if ($this->media === null) {
=======
    public function getDiskAttribute(?string $value): ?string
    {
        if($this->media==null){
>>>>>>> a12f125f4a (.)
=======
    public function getDiskAttribute(null|string $value): null|string
    {
        if ($this->media === null) {
>>>>>>> b93ef594b4 (.)
=======
    public function getDiskAttribute(?string $value): ?string
    {
        if($this->media==null){
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            return null;
        }
<<<<<<< HEAD

        return $this->media->disk;
    }

    public function getFileAttribute(?string $value): ?string
=======
        return $this->media->disk;
    }

<<<<<<< HEAD
    public function getFileAttribute(null|string $value): null|string
>>>>>>> 5200b63 (.)
    {
        if ($this->media === null) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFileAttribute(null|string $value): null|string
    {
        if ($this->media === null) {
=======
    public function getFileAttribute(?string $value): ?string
    {
        if($this->media==null){
>>>>>>> a12f125f4a (.)
=======
    public function getFileAttribute(null|string $value): null|string
    {
        if ($this->media === null) {
>>>>>>> b93ef594b4 (.)
=======
    public function getFileAttribute(?string $value): ?string
    {
        if($this->media==null){
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            return null;
        }
<<<<<<< HEAD

        return $this->media->path.'/'.$this->media->file_name;
    }

    public function getConvertedFileAttribute(?string $value): ?string
=======
        return $this->media->path . '/' . $this->media->file_name;
    }

<<<<<<< HEAD
    public function getConvertedFileAttribute(null|string $value): null|string
>>>>>>> 5200b63 (.)
    {
        if ($this->media === null) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getConvertedFileAttribute(null|string $value): null|string
    {
        if ($this->media === null) {
=======
    public function getConvertedFileAttribute(?string $value): ?string
    {
        if($this->media==null){
>>>>>>> a12f125f4a (.)
=======
    public function getConvertedFileAttribute(null|string $value): null|string
    {
        if ($this->media === null) {
>>>>>>> b93ef594b4 (.)
=======
    public function getConvertedFileAttribute(?string $value): ?string
    {
        if($this->media==null){
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            return null;
        }
        $info = pathinfo($this->media->file_name);
        // "dirname" => "."
        // "basename" => "20600550-uhd_3840_2160_30fps.mp4"
        // "extension" => "mp4"
        // "filename" => "20600550-uhd_3840_2160_30fps"

<<<<<<< HEAD
        return $this->media->path.'/conversions/'.$info['filename'].'_'.$this->id.'.'.$this->format;
=======
        return $this->media->path . '/conversions/' . $info['filename'] . '_' . $this->id . '.' . $this->format;
>>>>>>> 5200b63 (.)
    }
}
