<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Philosophy extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='philosophys';
    protected $guarded=[];
    public $translationModel=PhilosophyTranslation::class;
    public $translatedAttributes = ['name','sub_name',
        'title1','description1',
        'title2','description2',
        'title3','description3'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
