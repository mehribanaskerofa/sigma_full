<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='companies';
    protected $guarded=[];
    public $translationModel=CompanyTranslation::class;
    public $translatedAttributes = ['title','address','description','name','content','context','worked'];
//    protected $with='options';

    public function options()
    {
        return $this->belongsToMany(Option::class,OptionCompany::class,'company_id','option_id');
    }
    public function advs()
    {
        return $this->hasMany(Adv::class,'company_id','id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class,'company_id','id');
    }
    public function benefits()
    {
        return $this->hasMany(Benefit::class,'company_id','id');
    }
    public function infrastructures()
    {
        return $this->hasMany(Infrastructure::class,'company_id','id');
    }
    public function sliders()
    {
        return $this->hasMany(CompanyImage::class,'company_id','id');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
