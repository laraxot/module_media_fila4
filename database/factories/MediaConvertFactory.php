<?php

declare(strict_types=1);

namespace Modules\Media\Database\Factories;

<<<<<<< HEAD
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
=======
>>>>>>> f1c6d6e (.)
use Modules\Media\Models\MediaConvert;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> 5200b63 (.)

/**
 * @extends Factory<MediaConvert>
 */
class MediaConvertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = MediaConvert::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
