<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ---- models ---

use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateInvitationsTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> 0a466ed (.)
=======
return new class extends XotBaseMigration {
>>>>>>> 37a2da6 (.)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->string('session_id');
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
=======
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->uuid('id')->primary();
                $table->string('session_id');
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }
};
