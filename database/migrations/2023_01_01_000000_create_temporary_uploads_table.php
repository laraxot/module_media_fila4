<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ---- models ---

use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateInvitationsTable.
 */
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class extends XotBaseMigration {
>>>>>>> 5200b63 (.)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
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
    }
};
