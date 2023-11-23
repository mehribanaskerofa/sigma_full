<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class CompanyImage extends Model
{
    protected $table='company_images';
    protected $guarded=[];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
