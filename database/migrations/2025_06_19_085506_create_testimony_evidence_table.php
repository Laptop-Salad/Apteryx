<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimony_evidence', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\Person::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->boolean('is_stored_digitally');
            $table->smallInteger('digital_storage_type')->nullable(); // Evidence/DigitalStorageType enum

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimony_evidence');
    }
};
