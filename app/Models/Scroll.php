<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scroll extends Model
{
    use Translatable;
    use HasFactory;
    protected $table='scroll';
    protected $guarded=[];
    public $translationModel=ScrollTranslation::class;
    public $translatedAttributes = ['title','text'];
}
