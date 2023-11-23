<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class News extends Model implements TranslatableContract
{
    use Translatable;
    protected $table='newss';
    protected $guarded=[];
    public $translationModel=NewsTranslation::class;
    public $translatedAttributes = ['title','description'];
}
