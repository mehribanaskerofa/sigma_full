<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Infrastructure extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='infrastructures';
    protected $guarded=[];
    public $translationModel=InfrastructureTranslation::class;
    public $translatedAttributes = ['title','description'];

    public function type()
    {
        return $this->belongsTo(InfraType::class,'infrastructures_type_id','id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
