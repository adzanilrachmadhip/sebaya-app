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
        Schema::create('places', function (Blueprint $table) {
            // Primary Key
            $table->bigIncrements('id_places');

            // Content
            $table->string('place_name');
            $table->string('latitude');
            $table->string('longitude');
            $table->dateTime('created_at');
            $table->timestamp('updated_at');
            $table->integer('is_deleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
