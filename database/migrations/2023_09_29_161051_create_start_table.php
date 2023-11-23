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
        Schema::create('starts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

        });

        Schema::create('start_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('start_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title')->nullable();

            $table->string('title1')->nullable();
            $table->text('description1')->nullable();

            $table->string('title2')->nullable();
            $table->text('description2')->nullable();

            $table->string('title3')->nullable();
            $table->text('description3')->nullable();

            $table->string('title4')->nullable();
            $table->text('description4')->nullable();


            $table->unique(['start_id', 'locale']);
            $table->foreign('start_id')->references('id')->on('starts')->onDelete('cascade');
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
