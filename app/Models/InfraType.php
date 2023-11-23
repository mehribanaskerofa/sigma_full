<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class InfraType extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='infra_type';
    protected $guarded=[];
    public $translationModel=InfraTypeTranslation::class;
    public $translatedAttributes = ['title'];

}
