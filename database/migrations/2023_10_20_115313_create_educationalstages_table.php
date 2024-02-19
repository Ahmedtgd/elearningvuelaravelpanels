<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('educationalstages', function (Blueprint $table) {
        $table->id();
        $table->string('stage_name');
        $table->text('description')->nullable();
        $table->integer('order')->nullable();
        $table->string('status')->default('active');
        $table->unsignedBigInteger('created_by')->nullable();
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->date('start_date')->nullable();
        $table->date('end_date')->nullable();
        $table->string('image')->nullable();
        $table->unsignedBigInteger('user_id')->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        $table->unsignedBigInteger('category_id')->unsigned()->nullable();
        $table->foreign('category_id')->references('id')->on('categories')->nullable();
        $table->timestamps();

        // Foreign key constraints for created_by and updated_by columns
        $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educationalstages');
    }
};
