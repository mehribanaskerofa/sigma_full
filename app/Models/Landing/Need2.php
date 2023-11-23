<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Need2 extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='need2s';
    protected $guarded=[];
    public $translationModel=Need2Translation::class;
    public $translatedAttributes = [
        'name','sub_name',

        'title1','sub_title1',
        'title2','sub_title2',
        'title3','sub_title3',
        'title4','sub_title4',
    ];

}
