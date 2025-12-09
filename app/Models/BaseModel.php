<?php

declare(strict_types=1);

namespace Modules\Media\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    use \Modules\Xot\Models\Traits\HasXotFactory;
=======
    use HasFactory;
>>>>>>> 5200b63 (.)
=======
    /** @use HasFactory<TFactory> */
=======
>>>>>>> 1b9d086 (.)
    use \Modules\Xot\Models\Traits\HasXotFactory;
>>>>>>> 13d1d7e (.)
=======
    use HasFactory;
>>>>>>> 2a4b5df (.)

    // use Searchable;
    // //use Cachable;
    use Updater;

<<<<<<< HEAD
=======
>>>>>>> fbf6035 (.)
=======
>>>>>>> 2a4b5df (.)
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'media';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a4b5df (.)

    /** @var list<string> */
    protected $fillable = [
        'id',
    ];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> 2a4b5df (.)
    /**
     * ----
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }
<<<<<<< HEAD
>>>>>>> 5200b63 (.)

=======
>>>>>>> 13d1d7e (.)
=======

>>>>>>> 2a4b5df (.)
    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
<<<<<<< HEAD
=======
>>>>>>> fbf6035 (.)
=======
>>>>>>> 2a4b5df (.)
}
