<?php

declare(strict_types=1);

namespace Modules\Media\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Media\Models\Media;

/**
 * Media Factory
<<<<<<< HEAD
 *
 * Factory for creating Media model instances for testing and seeding.
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Factory for creating Media model instances for testing and seeding.
 *
=======
 * 
 * Factory for creating Media model instances for testing and seeding.
 * 
>>>>>>> a12f125f4a (.)
=======
 *
 * Factory for creating Media model instances for testing and seeding.
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
 * Factory for creating Media model instances for testing and seeding.
 * 
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
 * @extends Factory<Media>
 */
class MediaFactory extends Factory
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
     * @var class-string<Media>
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /** @var string $fileName */
        $fileName = $this->faker->word();
        /** @var string $extension */
        $extension = $this->faker->randomElement(['jpg', 'png', 'pdf', 'doc']);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        return [
            'model_type' => 'App\\Models\\User',
            'model_id' => $this->faker->numberBetween(1, 100),
            'uuid' => $this->faker->uuid(),
            'collection_name' => $this->faker->randomElement(['default', 'avatars', 'documents']),
            'name' => $fileName,
<<<<<<< HEAD
            'file_name' => $fileName.'.'.$extension,
=======
            'file_name' => $fileName . '.' . $extension,
>>>>>>> 5200b63 (.)
            'mime_type' => $this->getMimeTypeFromExtension($extension),
            'disk' => 'public',
            'conversions_disk' => 'public',
            'size' => $this->faker->numberBetween(1024, 10485760), // 1KB to 10MB
            'manipulations' => [],
            'custom_properties' => [],
            'generated_conversions' => [],
            'responsive_images' => [],
            'order_column' => $this->faker->numberBetween(1, 100),
            'directory' => $this->faker->randomElement(['uploads', 'documents', 'images']),
<<<<<<< HEAD
            'path' => '/storage/'.$fileName.'.'.$extension,
=======
            'path' => '/storage/' . $fileName . '.' . $extension,
>>>>>>> 5200b63 (.)
            'width' => $this->faker->optional()->numberBetween(100, 1920),
            'height' => $this->faker->optional()->numberBetween(100, 1080),
            'type' => $extension,
            'ext' => $extension,
        ];
    }

    /**
     * Create an image media.
<<<<<<< HEAD
=======
     *
     * @return static
>>>>>>> 5200b63 (.)
     */
    public function image(): static
    {
        $extension = (string) $this->faker->randomElement(['jpg', 'png', 'gif']);
        $fileName = (string) $this->faker->word();
<<<<<<< HEAD

<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
            'mime_type' => $this->getMimeTypeFromExtension($extension),
            'file_name' => $fileName.'.'.$extension,
=======
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
            'mime_type' => $this->getMimeTypeFromExtension($extension),
            'file_name' => $fileName . '.' . $extension,
>>>>>>> 5200b63 (.)
            'type' => $extension,
            'ext' => $extension,
            'width' => $this->faker->numberBetween(100, 1920),
            'height' => $this->faker->numberBetween(100, 1080),
        ]);
    }

    /**
     * Create a document media.
<<<<<<< HEAD
=======
     *
     * @return static
>>>>>>> 5200b63 (.)
     */
    public function document(): static
    {
        $extension = (string) $this->faker->randomElement(['pdf', 'doc', 'docx']);
        $fileName = (string) $this->faker->word();
<<<<<<< HEAD

<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
            'mime_type' => $this->getMimeTypeFromExtension($extension),
            'file_name' => $fileName.'.'.$extension,
=======
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
            'mime_type' => $this->getMimeTypeFromExtension($extension),
            'file_name' => $fileName . '.' . $extension,
>>>>>>> 5200b63 (.)
            'type' => $extension,
            'ext' => $extension,
            'width' => null,
            'height' => null,
        ]);
    }

    /**
     * Get MIME type from file extension.
<<<<<<< HEAD
=======
     *
     * @param string $extension
     * @return string
>>>>>>> 5200b63 (.)
     */
    private function getMimeTypeFromExtension(string $extension): string
    {
        return match ($extension) {
            'jpg', 'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'pdf' => 'application/pdf',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            default => 'application/octet-stream',
        };
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
