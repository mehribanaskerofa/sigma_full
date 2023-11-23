<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Principle extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='principles';
    protected $guarded=[];
    public $translationModel=PhilosophyTranslation::class;
    public $translatedAttributes = ['name','sub_name',
        'title1','description',
        'title2',
        'title3',];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
