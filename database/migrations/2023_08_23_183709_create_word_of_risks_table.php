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
        Schema::create('word_of_risks', function (Blueprint $table) {
            // Primary Key
            $table->bigIncrements('id_word');

            // Foreign Key
            $table->unsignedBigInteger('id_risk');

            // Content
            $table->string('word');
            $table->dateTime('created_at');
            $table->timestamp('update_at');
            $table->integer('is_deleted');

            // Relation
            $table->foreign('id_risk')->references('id_risk')->on('risks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_of_risks');
    }
};
