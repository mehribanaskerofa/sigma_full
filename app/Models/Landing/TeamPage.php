<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class TeamPage extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='team_pages';
    protected $guarded=[];
    public $translationModel=TeamPageTranslation::class;
    public $translatedAttributes = [
        'name','sub_name',
        'title','description','btn',
        'slug',
    ];

}
