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
        Schema::create('team_medias', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();

        });

        Schema::create('team_media_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_media_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('sub_title1')->nullable();
            $table->string('sub_title2')->nullable();
            $table->string('sub_title3')->nullable();
            $table->string('sub_title4')->nullable();
            $table->string('sub_title5')->nullable();
            $table->string('sub_title6')->nullable();
            $table->string('sub_title7')->nullable();
            $table->string('sub_title8')->nullable();
            $table->string('sub_title9')->nullable();
            $table->string('sub_title10')->nullable();



            $table->unique(['team_media_id', 'locale']);
            $table->foreign('team_media_id')->references('id')->on('team_medias')->onDelete('cascade');
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
