<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Video extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='videos';
    protected $guarded=[];
    public $translationModel=VideoTranslation::class;
    public $translatedAttributes = [
        'title'
    ];

}
