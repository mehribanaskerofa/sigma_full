<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Part extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='parts';
    protected $guarded=[];
    public $translationModel=PartTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',

        'title1','description1',
        'title2','description2',
        'title3','description3',
        'title4','description4',
        'title5','description5',
        'title6','description6',
        'title7','description7',
    ];

}
