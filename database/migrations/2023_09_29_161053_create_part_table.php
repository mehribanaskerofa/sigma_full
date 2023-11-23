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
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();

        });

        Schema::create('part_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('part_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title1')->nullable();
            $table->text('description1')->nullable();

            $table->string('title2')->nullable();
            $table->text('description2')->nullable();

            $table->string('title3')->nullable();
            $table->text('description3')->nullable();

            $table->string('title4')->nullable();
            $table->text('description4')->nullable();

            $table->string('title5')->nullable();
            $table->text('description5')->nullable();

            $table->string('title6')->nullable();
            $table->text('description6')->nullable();

            $table->string('title7')->nullable();
            $table->text('description7')->nullable();


            $table->unique(['part_id', 'locale']);
            $table->foreign('part_id')->references('id')->on('parts')->onDelete('cascade');
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
