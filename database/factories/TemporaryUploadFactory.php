<?php

declare(strict_types=1);

namespace Modules\Media\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Media\Models\TemporaryUpload;

/**
 * TemporaryUpload Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 * 
>>>>>>> 0a466ed (.)
=======
 *
 * Factory for creating TemporaryUpload model instances for testing and seeding.
 *
>>>>>>> 37a2da6 (.)
 * @extends Factory<TemporaryUpload>
 */
class TemporaryUploadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 0a466ed (.)
=======
     *
>>>>>>> 37a2da6 (.)
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
<<<<<<< HEAD
     */
    public function forSession(string $sessionId): static
    {
        return $this->state(fn (array $_attributes): array => [
=======
     *
     * @param string $sessionId
     * @return static
     */
    public function forSession(string $sessionId): static
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
            'session_id' => $sessionId,
        ]);
    }

    /**
     * Create temporary upload for current session.
<<<<<<< HEAD
     */
    public function currentSession(): static
    {
        return $this->state(fn (array $_attributes): array => [
=======
     *
     * @return static
     */
    public function currentSession(): static
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5200b63 (.)
            'session_id' => session()->getId(),
        ]);
    }
}
<<<<<<< HEAD
=======
        return $this->state(fn (array $attributes): array => [
            'session_id' => session()->getId(),
        ]);
    }
}
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
