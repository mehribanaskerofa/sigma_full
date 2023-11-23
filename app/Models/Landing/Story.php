<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Story extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='stories';
    protected $guarded=[];
    public $translationModel=StoryTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',

        'title1','description1','tag1',
        'title2','description2','tag2',

    ];

}
