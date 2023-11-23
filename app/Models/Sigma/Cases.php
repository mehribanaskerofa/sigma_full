<?php

namespace App\Models\Sigma;

use App\Models\Menu;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='casess';
    protected $guarded=[];
    public $translationModel=CasesTranslation::class;
    public $translatedAttributes = ['name','sub_name',
        'title','description','tags'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

}
