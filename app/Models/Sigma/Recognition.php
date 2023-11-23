<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Recognition extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='recognitions';
    protected $guarded=[];
    public $translationModel=PhilosophyTranslation::class;
    public $translatedAttributes = ['name','sub_name'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
