<?php

/**
 * @see https://github.com/spatie/laravel-medialibrary/blob/main/database/migrations/create_media_table.php.stub
 */

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- models -----
use Modules\Media\Models\Media;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateImagesTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class extends XotBaseMigration {
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
return new class extends XotBaseMigration {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
return new class extends XotBaseMigration {
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
return new class extends XotBaseMigration {
>>>>>>> a80d398 (.)
=======
>>>>>>> a12f125f4a (.)
=======
return new class extends XotBaseMigration {
>>>>>>> b93ef594b4 (.)
=======
return new class extends XotBaseMigration
{
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
return new class extends XotBaseMigration {
>>>>>>> f1c6d6e (.)
=======
return new class extends XotBaseMigration
{
>>>>>>> f41e45e (.)
    /**
     * i don't write table name, it take from Model, model is singular of this class wit.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Media::class, 'media_id');
            $table->string('format')->nullable();
            $table->string('codec_video')->nullable();
            $table->string('codec_audio')->nullable();
            $table->string('preset')->nullable();
            $table->string('bitrate')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('threads')->nullable();
            $table->integer('speed')->nullable();
            $table->decimal('percentage', 7, 3)->nullable();
            $table->decimal('remaining', 7, 3)->nullable();
            $table->decimal('rate', 7, 3)->nullable();
            $table->decimal('execution_time', 7, 3)->nullable();
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $this->hasColumn('format')) {
=======
            if (!$this->hasColumn('format')) {
>>>>>>> 5200b63 (.)
=======
            if (! $this->hasColumn('format')) {
>>>>>>> f41e45e (.)
                $table->string('format')->nullable();
            }

            $this->updateTimestamps($table, true);
        });
    }
};
