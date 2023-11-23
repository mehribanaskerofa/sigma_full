<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Section extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='sections';
    protected $guarded=[];
    public $translationModel=SectionTranslation::class;
    public $translatedAttributes = [
        'title','sub_title','description',
        'btn','video_url',
    ];

}
