<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Expert extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='experts';
    protected $guarded=[];
    public $translationModel=ExpertTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',

        'title1','description1',
        'title2','description2',
        'title3','description3',
        'title4','description4',
    ];

}
