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
        Schema::create('places_of_risks', function (Blueprint $table) {
            // Primary Key
            $table->bigIncrements('id_por');

            // Foreign Key
            $table->unsignedBigInteger('id_places');
            $table->unsignedBigInteger('id_risk');

            // Content
            $table->string('word');
            $table->dateTime('created_at');
            $table->timestamp('update_at');
            $table->integer('is_deleted');

            // Relation
            $table->foreign('id_places')->references('id_places')->on('places');
            $table->foreign('id_risk')->references('id_risk')->on('risks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places_of_risks');
    }
};
