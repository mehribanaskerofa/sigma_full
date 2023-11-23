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
        Schema::create('need1s', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();

        });

        Schema::create('need1_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('need1_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title1')->nullable();
            $table->text('sub_title1')->nullable();

            $table->string('title2')->nullable();
            $table->text('sub_title2')->nullable();

            $table->string('title3')->nullable();
            $table->text('sub_title3')->nullable();

            $table->string('title4')->nullable();
            $table->text('sub_title4')->nullable();

            $table->unique(['need1_id', 'locale']);
            $table->foreign('need1_id')->references('id')->on('need1s')->onDelete('cascade');
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
