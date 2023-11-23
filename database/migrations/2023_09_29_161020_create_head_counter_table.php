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
        Schema::create('head_counters', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('menu_id')->nullable();
            $table->timestamps();


            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
        });

        Schema::create('head_counter_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('head_counter_id');
            $table->string('locale')->index();
            $table->string('title1')->nullable();
            $table->string('sub_title1')->nullable();
            $table->string('counter1')->nullable();
            $table->string('name1')->nullable();

            $table->string('title2')->nullable();
            $table->string('sub_title2')->nullable();
            $table->string('counter2')->nullable();
            $table->string('name2')->nullable();

            $table->string('title3')->nullable();
            $table->string('sub_title3')->nullable();
            $table->string('counter3')->nullable();
            $table->string('name3')->nullable();

            $table->unique(['head_counter_id', 'locale']);
            $table->foreign('head_counter_id')->references('id')->on('head_counters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('head_counter_translations');
        Schema::dropIfExists('head_counters');
    }
};
