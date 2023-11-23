<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Technology extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='Technologies';
    protected $guarded=[];
    public $translationModel=TechnologyTranslation::class;
    public $translatedAttributes = [
        'title'
    ];

}
