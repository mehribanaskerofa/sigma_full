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
        Schema::create('talks', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('talk_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('talk_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();

            $table->unique(['talk_id', 'locale']);
            $table->foreign('talk_id')->references('id')->on('talks')->onDelete('cascade');
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
