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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('lesson_title');
            $table->text('lesson_content');
            $table->integer('lesson_duration');
            $table->integer('lesson_order');
            $table->string('video_title')->nullable();
            $table->string('docx_file')->nullable();
            $table->string('pdf_file')->nullable();
            $table->string('image_files')->nullable();
            $table->string('video_files')->nullable();
            $table->unsignedBigInteger('lesson_course_id');
            $table->foreign('lesson_course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
