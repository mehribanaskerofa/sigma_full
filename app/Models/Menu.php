<?php

namespace App\Models;

use App\Models\Sigma\Head;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Menu extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='menus';
    protected $guarded=[];
    public $translationModel=MenuTranslation::class;
    public $translatedAttributes = ['name','description','slug'];
    protected $casts = [
        'created_at' => 'datetime',
    ];
    public function head()
    {
        return $this->hasOne(Head::class,'menu_id','id');
    }

}
