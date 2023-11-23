<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Appdev extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='appdevs';
    protected $guarded=[];
    public $translationModel=AppdevTranslation::class;
    public $translatedAttributes = ['name','sub_name',
        'title1','description1',
        'title2','description2',
        'title3','description3',
        'title4','description4',
        'title5','description5',
        'title6','description6',
        'title7','description7',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
