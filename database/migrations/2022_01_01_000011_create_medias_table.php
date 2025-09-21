<?php

/**
 * @see https://github.com/spatie/laravel-medialibrary/blob/main/database/migrations/create_media_table.php.stub
 */

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- models -----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateImagesTable.
 */
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> a12f125f4a (.)
=======
return new class extends XotBaseMigration {
>>>>>>> b93ef594b4 (.)
=======
return new class extends XotBaseMigration
{
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    /**
     * i don't write table name, it take from Model, model is singular of this class wit.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
            // $table->bigIncrements('id');
            // $table->uuidMorphs('model');
            $table->uuidMorphs('model');
            $table->uuid('uuid')->nullable()->unique()->index();
            $table->string('collection_name');
            $table->string('name');
            $table->string('file_name');
            $table->string('mime_type')->nullable();
            $table->string('disk');
            $table->string('conversions_disk')->nullable();
            $table->unsignedBigInteger('size');
            $table->json('manipulations');
            $table->json('custom_properties');
            $table->json('generated_conversions');
            $table->json('responsive_images');
            $table->unsignedInteger('order_column')->nullable()->index();
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            // -- Change
            if ($this->hasColumn('model_id')) {
                $table->string('model_id', 36)->nullable()->change();
            }
            $this->updateTimestamps($table, true);
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
                // $table->bigIncrements('id');
                // $table->uuidMorphs('model');
                $table->uuidMorphs('model');
                $table->uuid('uuid')->nullable()->unique()->index();
                $table->string('collection_name');
                $table->string('name');
                $table->string('file_name');
                $table->string('mime_type')->nullable();
                $table->string('disk');
                $table->string('conversions_disk')->nullable();
                $table->unsignedBigInteger('size');
                $table->json('manipulations');
                $table->json('custom_properties');
                $table->json('generated_conversions');
                $table->json('responsive_images');
                $table->unsignedInteger('order_column')->nullable()->index();
            }
        );
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            // -- Change
            if ($this->hasColumn('model_id')) {
                $table->string('model_id', 36)->nullable()->change();
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======
            $this->updateTimestamps($table, true);
        });
>>>>>>> b93ef594b4 (.)
=======
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // -- Change
                if ($this->hasColumn('model_id')) {
                    $table->string('model_id', 36)->nullable()->change();
                }
                $this->updateTimestamps($table, true);
            }
        );
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }
};
