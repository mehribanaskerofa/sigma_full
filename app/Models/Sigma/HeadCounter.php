<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class HeadCounter extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='head_counters';
    protected $guarded=[];
    public $translationModel=HeadCounterTranslation::class;
    public $translatedAttributes = [
        'title1','sub_title1',
        'title2','sub_title2',
        'title3','sub_title3',
        'counter1','name1',
        'counter2','name2',
        'counter3','name3',
        ];
    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
