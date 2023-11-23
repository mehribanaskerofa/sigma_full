<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    protected $table='slider';
    protected $guarded=[];
    public $translationModel=SliderTranslation::class;
    public $translatedAttributes = ['title','text','button_text'];
}
