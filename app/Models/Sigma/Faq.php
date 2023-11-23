<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='faqs';
    protected $guarded=[];
    public $translationModel=FaqTranslation::class;
    public $translatedAttributes = ['name','sub_name',
        'title','description'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
