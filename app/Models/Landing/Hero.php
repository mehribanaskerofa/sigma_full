<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Hero extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='heros';
    protected $guarded=[];
    public $translationModel=HeroTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',
        'title','description','sub_title',

        'title1',
        'title2',
        'title3',
    ];

}
