<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='expertises';
    protected $guarded=[];
    public $translationModel=ExpertiseTranslation::class;
    public $translatedAttributes = ['title','sub_title'];


}
