<?php

declare(strict_types=1);

namespace Modules\Media\Datas;

<<<<<<< HEAD
use FFMpeg\Format\Video\WebM;
=======
<<<<<<< HEAD
use FFMpeg\Format\Video\WebM;
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use FFMpeg\Format\Video\DefaultVideo;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    public null|int $width = null;

    public null|int $height = null;

    // -threads 4: utilizza 4 thread per l'elaborazione, aumentando la velocità di conversione sfruttando il multi-threading.
    public null|int $threads = null;

    // -speed 4: imposta la velocità del codec VP9 a 4, che è un valore elevato per massimizzare la velocità di codifica.
    public null|int $speed = null;
<<<<<<< HEAD
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
=======
    public ?int $width = null;

    public ?int $height = null;

    // -threads 4: utilizza 4 thread per l'elaborazione, aumentando la velocità di conversione sfruttando il multi-threading.
    public ?int $threads = null;

    // -speed 4: imposta la velocità del codec VP9 a 4, che è un valore elevato per massimizzare la velocità di codifica.
    public ?int $speed = null;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

    public function exists(): bool
    {
        return Storage::disk($this->disk)->exists($this->file);
    }

    public function getFFMpegFormat(): DefaultVideo
    {
<<<<<<< HEAD
        $format = new WebM($this->codec_audio, $this->codec_video);
=======
<<<<<<< HEAD
        $format = new WebM($this->codec_audio, $this->codec_video);
=======
        $format = new \FFMpeg\Format\Video\WebM($this->codec_audio, $this->codec_video);
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        $format = $format->setKiloBitrate((int) $this->bitrate);
        Assert::isInstanceOf($format, DefaultVideo::class);

        return $format;
    }

    public function getConvertedFilename(): string
    {
        $format = $this->getFFMpegFormat();
        $extension = mb_strtolower(class_basename($format));

<<<<<<< HEAD
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return Str::of($this->file)->replaceLast('.mp4', '.' . $extension)->toString();
=======
        return Str::of($this->file)
            ->replaceLast('.mp4', '.'.$extension)
            ->toString();
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
    }
}
