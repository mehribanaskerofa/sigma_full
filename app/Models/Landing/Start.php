<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Start extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='starts';
    protected $guarded=[];
    public $translationModel=StartTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',
        'title',

        'title1','description1',
        'title2','description2',
        'title3','description3',
        'title4','description4',
    ];

}
