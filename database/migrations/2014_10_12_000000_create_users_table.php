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
        Schema::create('users', function (Blueprint $table) {
            // Primary Key
            $table->bigIncrements('id');

            // Foreign Key
            $table->unsignedBigInteger('role_id');

            // Content
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('created_at');
            $table->timestamp('updated_at');
            $table->integer('is_deleted');

            // Relation
            $table->foreign('role_id')->references('id_role')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
