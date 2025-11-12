<?php

declare(strict_types=1);

namespace Modules\Media\Database\Factories;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Media\Models\MediaConvert;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
use Modules\Media\Models\MediaConvert;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> 5200b63 (.)

/**
 * @extends Factory<MediaConvert>
<<<<<<< HEAD
=======
=======
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Media\Models\MediaConvert>
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
 */
class MediaConvertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
<<<<<<< HEAD
    protected $model = MediaConvert::class;
=======
<<<<<<< HEAD
    protected $model = MediaConvert::class;
=======
    protected $model = \Modules\Media\Models\MediaConvert::class;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
