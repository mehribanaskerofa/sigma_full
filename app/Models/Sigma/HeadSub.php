<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class HeadSub extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='head_subs';
    protected $guarded=[];
    public $translationModel=HeadSubTranslation::class;
    public $translatedAttributes = ['title','sub_title'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

    public function project()
    {
//        return $this->belongsTo(Project::class,'project_id','id');
    }
}
