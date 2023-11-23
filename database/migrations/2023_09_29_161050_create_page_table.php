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
        Schema::create('team_pages', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();

        });

        Schema::create('team_page_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_page_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('slug')->nullable();

            $table->string('title')->nullable();
            $table->string('btn')->nullable();
            $table->text('description')->nullable();

            $table->unique(['team_page_id', 'locale']);
            $table->foreign('team_page_id')->references('id')->on('team_pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
