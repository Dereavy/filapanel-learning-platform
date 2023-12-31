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
        Schema::create('student_lesson', function (Blueprint $table) {
            $table->foreignId('student_id')->unsigned()->constrained('students')->onDelete('cascade');
            $table->foreignId('lesson_id')->unsigned()->constrained('lessons')->onDelete('cascade');
            $table->integer('completion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_lesson');
    }
};
