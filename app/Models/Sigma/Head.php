<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Head extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='heads';
    protected $guarded=[];
    public $translationModel=HeadTranslation::class;
    public $translatedAttributes = ['title','description','sub_title'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

    public function project()
    {
//        return $this->belongsTo(Project::class,'project_id','id');
    }
}
