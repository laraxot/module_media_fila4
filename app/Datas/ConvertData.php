<?php

declare(strict_types=1);

namespace Modules\Media\Datas;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use FFMpeg\Format\Video\DefaultVideo;
use FFMpeg\Format\Video\WebM;
=======
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use FFMpeg\Format\Video\WebM;
use FFMpeg\Format\Video\DefaultVideo;
>>>>>>> 5200b63 (.)
=======
use FFMpeg\Format\Video\DefaultVideo;
use FFMpeg\Format\Video\WebM;
>>>>>>> f41e45e (.)
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Wireable;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class ConvertData extends Data implements Wireable
{
    use WireableData;

    public string $disk;

    public string $file;

    public string $format;

    // -c:v libvpx-vp9: Utilizza il codec video VP9 per WebM.
    public string $codec_video;

    // -c:a libvorbis: Utilizza il codec audio Vorbis
    public string $codec_audio;

    // -preset ultrafast: Imposta il preset di velocità su ultrafast.
    public string $preset;

    // -b:v 1M: Imposta il bitrate video a 1 Mbps (puoi modificarlo in base alle tue esigenze).
    public string $bitrate;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?int $width = null;

    public ?int $height = null;

    // -threads 4: utilizza 4 thread per l'elaborazione, aumentando la velocità di conversione sfruttando il multi-threading.
    public ?int $threads = null;

    // -speed 4: imposta la velocità del codec VP9 a 4, che è un valore elevato per massimizzare la velocità di codifica.
    public ?int $speed = null;
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
    public null|int $width = null;
=======
    public ?int $width = null;
>>>>>>> f41e45e (.)

    public ?int $height = null;

    // -threads 4: utilizza 4 thread per l'elaborazione, aumentando la velocità di conversione sfruttando il multi-threading.
    public ?int $threads = null;

    // -speed 4: imposta la velocità del codec VP9 a 4, che è un valore elevato per massimizzare la velocità di codifica.
<<<<<<< HEAD
    public null|int $speed = null;
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
    public ?int $width = null;
=======
    public null|int $width = null;
>>>>>>> b93ef594b4 (.)

    public null|int $height = null;

    // -threads 4: utilizza 4 thread per l'elaborazione, aumentando la velocità di conversione sfruttando il multi-threading.
    public null|int $threads = null;

    // -speed 4: imposta la velocità del codec VP9 a 4, che è un valore elevato per massimizzare la velocità di codifica.
<<<<<<< HEAD
    public ?int $speed = null;
>>>>>>> a12f125f4a (.)
=======
    public null|int $speed = null;
>>>>>>> b93ef594b4 (.)
>>>>>>> 47a54fe (.)
=======
    public ?int $width = null;

    public ?int $height = null;

    // -threads 4: utilizza 4 thread per l'elaborazione, aumentando la velocità di conversione sfruttando il multi-threading.
    public ?int $threads = null;

    // -speed 4: imposta la velocità del codec VP9 a 4, che è un valore elevato per massimizzare la velocità di codifica.
    public ?int $speed = null;
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
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
    public ?int $speed = null;
>>>>>>> f41e45e (.)

    public function exists(): bool
    {
        return Storage::disk($this->disk)->exists($this->file);
    }

    public function getFFMpegFormat(): DefaultVideo
    {
        $format = new WebM($this->codec_audio, $this->codec_video);
        $format = $format->setKiloBitrate((int) $this->bitrate);
        Assert::isInstanceOf($format, DefaultVideo::class);

        return $format;
    }

    public function getConvertedFilename(): string
    {
        $format = $this->getFFMpegFormat();
        $extension = mb_strtolower(class_basename($format));

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return Str::of($this->file)->replaceLast('.mp4', '.'.$extension)->toString();
=======
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
=======
        return Str::of($this->file)
            ->replaceLast('.mp4', '.'.$extension)
            ->toString();
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> a80d398 (.)
=======
>>>>>>> a12f125f4a (.)
=======
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> b93ef594b4 (.)
=======
        return Str::of($this->file)
            ->replaceLast('.mp4', '.'.$extension)
            ->toString();
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> f1c6d6e (.)
=======
        return Str::of($this->file)->replaceLast('.mp4', '.'.$extension)->toString();
>>>>>>> f41e45e (.)
    }
}
