<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class SlideIndex extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='slide_indexs';
    protected $guarded=[];
    public $translationModel=SlideIndexTranslation::class;
    public $translatedAttributes = ['title','description'];


}
