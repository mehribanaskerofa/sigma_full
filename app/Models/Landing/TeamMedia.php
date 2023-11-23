<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class TeamMedia extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='team_medias';
    protected $guarded=[];
    public $translationModel=TeamMediaTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',

        'sub_title1',
        'sub_title2',
        'sub_title3',
        'sub_title4',
        'sub_title5',
        'sub_title6',
        'sub_title7',
        'sub_title8',
        'sub_title9',
        'sub_title10',
    ];

}
