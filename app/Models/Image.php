<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Image extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='images';
    protected $guarded=[];
    public $translationModel=ImageTranslation::class;
    public $translatedAttributes = ['title'];


    public function imageable()
    {
        return $this->morphTo();
    }
}
