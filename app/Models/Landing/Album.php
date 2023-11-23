<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Album extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='albums';
    protected $guarded=[];
    public $translationModel=AlbumTranslation::class;
    public $translatedAttributes = [
        'title'
    ];

}
