<?php

declare(strict_types=1);

namespace Modules\Media\Services;

use Exception;
use Illuminate\Support\Facades\Storage;
use Webmozart\Assert\Assert;

use function is_string;
use function Safe\fclose;
use function Safe\fread;
use function Safe\ob_end_clean;
use function Safe\set_time_limit;

/**
 * Handles video streaming from a given path.
 */
class VideoStream
{
    private int $bufferSize = 102400; // Buffer size for streaming

    private int $start = 0; // Start position for streaming

    private int $end = 0; // End position for streaming

    private int $size = 0; // Total size of the video

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private ?string $mime = null; // MIME type of the video

    private ?int $fileModifiedTime = null; // Last modified time of the video file
=======
    private null|string $mime = null; // MIME type of the video

    private null|int $fileModifiedTime = null; // Last modified time of the video file
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
    private null|string $mime = null; // MIME type of the video

    private null|int $fileModifiedTime = null; // Last modified time of the video file
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
    private null|string $mime = null; // MIME type of the video

    private null|int $fileModifiedTime = null; // Last modified time of the video file
=======
    private ?string $mime = null; // MIME type of the video

    private ?int $fileModifiedTime = null; // Last modified time of the video file
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 47a54fe (.)
=======
    private null|string $mime = null; // MIME type of the video

    private null|int $fileModifiedTime = null; // Last modified time of the video file
<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    private null|string $mime = null; // MIME type of the video

    private null|int $fileModifiedTime = null; // Last modified time of the video file
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    private ?string $mime = null; // MIME type of the video

    private ?int $fileModifiedTime = null; // Last modified time of the video file
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)

    /** @var resource|null */
    private $stream = null; // File stream resource

    /**
     * Initialize the video stream.
     *
<<<<<<< HEAD
     * @param  string  $disk  The disk storage name
     * @param  string  $path  The path to the video file
=======
     * @param  string $disk  The disk storage name
     * @param  string $path  The path to the video file
>>>>>>> 5200b63 (.)
     *
     * @throws Exception If the file does not exist or other errors
     */
    public function __construct(string $disk, string $path)
    {
        $filesystem = Storage::disk($disk);

<<<<<<< HEAD
        if (! $filesystem->exists($path)) {
=======
        if (!$filesystem->exists($path)) {
>>>>>>> 5200b63 (.)
            throw new Exception("File does not exist at path: {$path}");
        }

        $mime = $filesystem->mimeType($path);
<<<<<<< HEAD
        if ($mime === false) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($mime === false) {
=======
        if($mime==false){
>>>>>>> a12f125f4a (.)
=======
        if ($mime === false) {
>>>>>>> b93ef594b4 (.)
=======
        if($mime==false){
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            throw new Exception('Unable to determine MIME type.');
        }
        $this->stream = $filesystem->readStream($path);
        $this->mime = $mime;
        $this->fileModifiedTime = $filesystem->lastModified($path);
        $this->size = $filesystem->size($path);

<<<<<<< HEAD
        if (! is_string($this->mime)) {
=======
        if (!is_string($this->mime)) {
>>>>>>> 5200b63 (.)
            throw new Exception('Unable to determine MIME type.');
        }
    }

    /**
     * Start streaming the video.
     */
    public function start(): void
    {
        $this->setHeaders();
        $this->streamContent();
        $this->closeStream();
    }

    /**
     * Set HTTP headers for video streaming.
     */
    private function setHeaders(): void
    {
        ob_end_clean(); // Clean any previous output
<<<<<<< HEAD
        header('Content-Type: '.$this->mime);
        header('Cache-Control: max-age=2592000, public'); // 30 days cache
        header('Expires: '.gmdate('D, d M Y H:i:s', time() + 2592000).' GMT'); // 30 days in the future
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', $this->fileModifiedTime).' GMT');
=======
        header('Content-Type: ' . $this->mime);
        header('Cache-Control: max-age=2592000, public'); // 30 days cache
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 2592000) . ' GMT'); // 30 days in the future
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $this->fileModifiedTime) . ' GMT');
>>>>>>> 5200b63 (.)

        $this->end = $this->size - 1;
        header('Accept-Ranges: bytes');

        Assert::nullOrString($rangeHeader = $_SERVER['HTTP_RANGE'] ?? null);
        if ($rangeHeader !== null) {
            $this->processRangeHeader($rangeHeader);
        } else {
<<<<<<< HEAD
            header('Content-Length: '.$this->size);
=======
            header('Content-Length: ' . $this->size);
>>>>>>> 5200b63 (.)
        }
    }

    /**
     * Process the range header for partial content requests.
     */
    private function processRangeHeader(string $rangeHeader): void
    {
        [$unit, $range] = explode('=', $rangeHeader, 2);

        if ($unit !== 'bytes') {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            header(sprintf('Content-Range: bytes %d-%d/%d', $this->start, $this->end, $this->size));
<<<<<<< HEAD
            exit();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            exit();
=======
            exit;
>>>>>>> a12f125f4a (.)
=======
            exit();
>>>>>>> b93ef594b4 (.)
=======
            exit;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        }

        $rangeParts = explode('-', $range);
        $start = (int) $rangeParts[0];
<<<<<<< HEAD
        $end = isset($rangeParts[1]) ? ((int) $rangeParts[1]) : $this->end;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $end = isset($rangeParts[1]) ? ((int) $rangeParts[1]) : $this->end;
=======
        $end = isset($rangeParts[1]) ? (int) $rangeParts[1] : $this->end;
>>>>>>> a12f125f4a (.)
=======
        $end = isset($rangeParts[1]) ? ((int) $rangeParts[1]) : $this->end;
>>>>>>> b93ef594b4 (.)
=======
        $end = isset($rangeParts[1]) ? (int) $rangeParts[1] : $this->end;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

        if ($start > $end || $start >= $this->size || $end >= $this->size) {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            header(sprintf('Content-Range: bytes %d-%d/%d', $this->start, $this->end, $this->size));
<<<<<<< HEAD
            exit();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            exit();
=======
            exit;
>>>>>>> a12f125f4a (.)
=======
            exit();
>>>>>>> b93ef594b4 (.)
=======
            exit;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        }

        $this->start = $start;
        $this->end = $end;

<<<<<<< HEAD
        $length = ($this->end - $this->start) + 1;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $length = ($this->end - $this->start) + 1;
=======
        $length = $this->end - $this->start + 1;
>>>>>>> a12f125f4a (.)
=======
        $length = ($this->end - $this->start) + 1;
>>>>>>> b93ef594b4 (.)
=======
        $length = $this->end - $this->start + 1;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        header('HTTP/1.1 206 Partial Content');
<<<<<<< HEAD
        header('Content-Length: '.$length);
=======
        header('Content-Length: ' . $length);
>>>>>>> 5200b63 (.)
        header(sprintf('Content-Range: bytes %d-%d/%d', $this->start, $this->end, $this->size));
    }

    /**
     * Stream the video content to the client.
     */
    private function streamContent(): void
    {
        set_time_limit(0); // Disable time limit for streaming

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_resource($this->stream)) {
=======
        if (!is_resource($this->stream)) {
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        if (!is_resource($this->stream)) {
=======
        if (! is_resource($this->stream)) {
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        if (!is_resource($this->stream)) {
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        if (!is_resource($this->stream)) {
>>>>>>> a80d398 (.)
=======
        if (!is_resource($this->stream)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_resource($this->stream)) {
=======
        if (! is_resource($this->stream)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_resource($this->stream)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! is_resource($this->stream)) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
            throw new Exception('Stream resource is not valid.');
        }

        fseek($this->stream, $this->start);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        while (! feof($this->stream) && $this->start <= $this->end) {
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
        while (!feof($this->stream) && $this->start <= $this->end) {
>>>>>>> 5200b63 (.)
            $bytesToRead = min($this->bufferSize, ($this->end - $this->start) + 1);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        while (!feof($this->stream) && $this->start <= $this->end) {
            $bytesToRead = min($this->bufferSize, ($this->end - $this->start) + 1);
=======
        while (! feof($this->stream) && $this->start <= $this->end) {
            $bytesToRead = min($this->bufferSize, $this->end - $this->start + 1);
>>>>>>> a12f125f4a (.)
=======
        while (!feof($this->stream) && $this->start <= $this->end) {
            $bytesToRead = min($this->bufferSize, ($this->end - $this->start) + 1);
>>>>>>> b93ef594b4 (.)
=======
        while (! feof($this->stream) && $this->start <= $this->end) {
            $bytesToRead = min($this->bufferSize, $this->end - $this->start + 1);
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            if ($bytesToRead > 0) {
                $data = fread($this->stream, $bytesToRead);
                echo $data;
                flush();
                $this->start += $bytesToRead;
            } else {
                break; // Evita loop infiniti se $bytesToRead <= 0
            }
        }
    }

    /**
     * Close the file stream and terminate the script.
     */
    private function closeStream(): void
    {
        if (is_resource($this->stream)) {
            fclose($this->stream);
        }

<<<<<<< HEAD
        exit();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        exit();
=======
        exit;
>>>>>>> a12f125f4a (.)
=======
        exit();
>>>>>>> b93ef594b4 (.)
=======
        exit;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }
}
