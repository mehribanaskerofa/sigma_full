<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Longside extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='longsides';
    protected $guarded=[];
    public $translationModel=LongsideTranslation::class;
    public $translatedAttributes = [
        'name','sub_name1','sub_name2',
        'title',

        'title1',
        'title2',
        'title3',
        'title4',
    ];

}
