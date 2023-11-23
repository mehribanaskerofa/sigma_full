<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='banners';
    protected $guarded=[];
    public $translationModel=BannerTranslation::class;
    public $translatedAttributes = ['name','sub_name',
        'title1','text1','sub_title1','description1',
        'title2','text2','sub_title2', 'description2',
        'title3','text3','sub_title3', 'description3'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
