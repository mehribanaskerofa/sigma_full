<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table='blog';
    protected $guarded=[];
    public $translationModel=BlogTranslation::class;
    public $translatedAttributes = ['blog_title','blog_text'];
}
