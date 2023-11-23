<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='services';
    protected $guarded=[];
    public $translationModel=ServiceTranslation::class;
    public $translatedAttributes = ['title','description'];


}
