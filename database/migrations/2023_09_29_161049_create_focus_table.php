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
        Schema::create('focuss', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();

        });

        Schema::create('focus_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('focus_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title1')->nullable();
            $table->text('description1')->nullable();

            $table->string('title2')->nullable();
            $table->text('description2')->nullable();

            $table->string('title3')->nullable();
            $table->text('description3')->nullable();


            $table->unique(['focus_id', 'locale']);
            $table->foreign('focus_id')->references('id')->on('focuss')->onDelete('cascade');
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
