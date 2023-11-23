<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Source extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='sources';
    protected $guarded=[];
    public $translationModel=SourceTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',

        'title1','description1',
        'title2','description2',
        'title3','description3',
    ];

}
