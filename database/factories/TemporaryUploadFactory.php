<?php

declare(strict_types=1);

namespace Modules\Media\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Media\Models\TemporaryUpload;

/**
 * TemporaryUpload Factory
<<<<<<< HEAD
 *
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 * 
>>>>>>> a12f125f4a (.)
=======
 *
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 * 
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
 * @extends Factory<TemporaryUpload>
 */
class TemporaryUploadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
     * @var class-string<TemporaryUpload>
     */
    protected $model = TemporaryUpload::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'session_id' => $this->faker->uuid(),
        ];
    }

    /**
     * Create temporary upload for a specific session.
     *
     * @param string $sessionId
     * @return static
     */
    public function forSession(string $sessionId): static
    {
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> a12f125f4a (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> b93ef594b4 (.)
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            'session_id' => $sessionId,
        ]);
    }

    /**
     * Create temporary upload for current session.
     *
     * @return static
     */
    public function currentSession(): static
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        return $this->state(fn(array $_attributes): array => [
            'session_id' => session()->getId(),
        ]);
    }
}
<<<<<<< HEAD
=======
=======
        return $this->state(fn (array $attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> b93ef594b4 (.)
            'session_id' => session()->getId(),
        ]);
    }
}
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        return $this->state(fn (array $attributes): array => [
            'session_id' => session()->getId(),
        ]);
    }
}
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
