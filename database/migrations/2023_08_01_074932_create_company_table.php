<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
//        Schema::create('companies', function (Blueprint $table) {
//            $table->id();
//            $table->string('email')->nullable();
//            $table->string('phone')->nullable();
//            $table->integer('project_count')->nullable();
//            $table->integer('block_count')->nullable();
//            $table->integer('house_count')->nullable();
//            $table->text('iframe')->nullable();
//            $table->string('image')->nullable();
//            $table->string('logo')->nullable();//logo
//            $table->text('visual')->nullable();//video
//            $table->float('latitude')->nullable();
//            $table->float('longitude')->nullable();
//            $table->string('date')->nullable();
//            $table->string('color')->nullable();
//            $table->timestamps();
//        });
//
//        Schema::create('company_translations', function (Blueprint $table) {
//            $table->id();
//            $table->unsignedBigInteger('company_id');
//            $table->string('locale')->index();
//            $table->string('name')->nullable();
//            $table->string('title')->nullable();
//            $table->text('content')->nullable();
//            $table->string('context')->nullable();
//            $table->text('description')->nullable();
//            $table->string('address')->nullable();
//            $table->string('worked')->nullable();
////            $table->string('zone')->nullable();
////            $table->string('territory')->nullable();//hemiseyasil
//
//            $table->unique(['company_id', 'locale']);
//            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
//        });
    }
    public function down(): void
    {
        Schema::dropIfExists('company_translations');
        Schema::dropIfExists('companies');
    }
};
