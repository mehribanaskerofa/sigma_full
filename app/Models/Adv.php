<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Adv extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='advs';
    protected $guarded=[];
    public $translationModel=AdvTranslation::class;
    public $translatedAttributes = ['title','name'];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }


}
