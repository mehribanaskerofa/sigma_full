<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Dev extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='devs';
    protected $guarded=[];
    public $translationModel=DevTranslation::class;
    public $translatedAttributes = ['name','sub_name','title','description1','description2'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
