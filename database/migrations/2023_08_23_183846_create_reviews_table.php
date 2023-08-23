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
        Schema::create('reviews', function (Blueprint $table) {
            // Primary Key
            $table->bigIncrements('id_review');

            // Foreign Key
            $table->unsignedBigInteger('id_places');
            $table->unsignedBigInteger('id_risk');
            $table->unsignedBigInteger('inputed_by');

            // Content
            $table->dateTime('created_at');
            $table->timestamp('update_at');
            $table->integer('is_deleted');

            // Relation
            $table->foreign('id_places')->references('id_places')->on('places');
            $table->foreign('id_risk')->references('id_risk')->on('risks');
            $table->foreign('inputed_by')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
