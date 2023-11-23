<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $table='galleries';
    protected $guarded=[];


    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
