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
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('solution_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solution_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();

            $table->unique(['solution_id', 'locale']);
            $table->foreign('solution_id')->references('id')->on('solutions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section');
    }
};
