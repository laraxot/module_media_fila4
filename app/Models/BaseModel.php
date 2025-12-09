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
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'media';
}
