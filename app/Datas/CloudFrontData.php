<?php

declare(strict_types=1);

namespace Modules\Media\Datas;

<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Livewire\Wireable;
use RuntimeException;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
=======
use RuntimeException;
use FFMpeg\Format\Video\DefaultVideo;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
>>>>>>> 5200b63 (.)

use function Safe\file_get_contents;

class CloudFrontData extends Data implements Wireable
{
    use WireableData;

<<<<<<< HEAD
    public string $region; // ' => env('CLOUDFRONT_REGION', 'eu-west-1'),

    public string $base_url; // ' => env('CLOUDFRONT_RESOURCE_KEY_BASE_URL'),

    public ?string $private_key; // ' => env('CLOUDFRONT_PRIVATE_KEY'),

    public ?string $private_key_path; // ' => env('CLOUDFRONT_PRIVATE_KEY_PATH'),

    public string $key_pair_id; // ' => env('CLOUDFRONT_KEYPAIR_ID'),
=======
    public string $region; //' => env('CLOUDFRONT_REGION', 'eu-west-1'),
    public string $base_url; //' => env('CLOUDFRONT_RESOURCE_KEY_BASE_URL'),
    public null|string $private_key; //' => env('CLOUDFRONT_PRIVATE_KEY'),
    public null|string $private_key_path; //' => env('CLOUDFRONT_PRIVATE_KEY_PATH'),
    public string $key_pair_id; //' => env('CLOUDFRONT_KEYPAIR_ID'),
>>>>>>> 5200b63 (.)

    /**
     * Singleton instance.
     */
<<<<<<< HEAD
    private static ?self $instance = null;

    /**
     * Creates or returns the singleton instance.
     */
    public static function make(): self
    {
        if (! self::$instance) {
=======
    private static null|self $instance = null;

    /**
     * Creates or returns the singleton instance.
     *
     * @return self
     */
    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
        if (! self::$instance) {
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        if (!self::$instance) {
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
            /** @var array<string, mixed> $data */
            $data = Config::array('services.cloudfront');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function getPrivateKey(): string
    {
        if ($this->private_key) {
            return $this->private_key;
        }
        if ($this->private_key_path) {
            return file_get_contents(storage_path($this->private_key_path));
        }
        throw new RuntimeException('CLOUDFRONT_PRIVATE_KEY environment variable is not set or empty');
    }
}
