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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // relasi ke users
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->string('class');
            $table->string('project_title');
            $table->text('description')->nullable();
            $table->string('creator');
            $table->string('team')->nullable();
            $table->string('project_tools')->nullable();
            $table->string('project_link')->nullable();
            $table->string('project_picture')->nullable();
            $table->timestamps();

            // foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('project_category')
                ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
