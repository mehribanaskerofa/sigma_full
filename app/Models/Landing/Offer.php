<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Offer extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='offers';
    protected $guarded=[];
    public $translationModel=OfferTranslation::class;
    public $translatedAttributes = [
        'title'
    ];

}
