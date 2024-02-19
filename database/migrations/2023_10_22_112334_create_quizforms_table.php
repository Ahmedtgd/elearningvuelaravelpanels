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
        Schema::create('quizforms', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('note')->nullable();
            $table->text('question')->nullable();
            $table->string('solve1')->nullable();
            $table->string('solve2')->nullable();
            $table->string('solve3')->nullable();
            $table->string('solve4')->nullable();
            $table->string('rightanswer')->nullable();

            $table->string('docx_file')->nullable();
            $table->string('pdf_file')->nullable();
            $table->string('image_files')->nullable();
            $table->string('video_files')->nullable();
            $table->string('quiz_results')->nullable();
            $table->string('feedback')->nullable();    //teachers review
            $table->unsignedBigInteger('quiz_id')->nullable();
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('set null');
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizforms');
    }
};
