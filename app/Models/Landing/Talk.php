<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Talk extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='talks';
    protected $guarded=[];
    public $translationModel=TalkTranslation::class;
    public $translatedAttributes = [
        'title'
    ];

}
