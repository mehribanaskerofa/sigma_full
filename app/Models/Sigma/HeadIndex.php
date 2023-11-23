<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class HeadIndex extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='head_indexs';
    protected $guarded=[];
    public $translationModel=HeadIndexTranslation::class;
    public $translatedAttributes = ['title','title1','title2','title3'];


}
