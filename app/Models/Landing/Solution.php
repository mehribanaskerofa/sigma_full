<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Solution extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='solutions';
    protected $guarded=[];
    public $translationModel=SolutionTranslation::class;
    public $translatedAttributes = [
        'title'
    ];

}
