<?php

declare(strict_types=1);

namespace Modules\Media\Models;

use Modules\Xot\Models\XotBaseModel;

/**
 * Base Model for Media module.
 *
 * Extends XotBaseModel which provides all standard properties and methods.
 *
 * @see \Modules\Xot\Models\XotBaseModel
 */
abstract class BaseModel extends XotBaseModel
{
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

    // use Searchable;
    // //use Cachable;
    use Updater;

=======
>>>>>>> fbf6035 (.)
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'media';
<<<<<<< HEAD

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
    
=======
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
>>>>>>> 5200b63 (.)

=======
>>>>>>> 13d1d7e (.)
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
=======
>>>>>>> fbf6035 (.)
}
