<?php

namespace App\Models\Landing;

use App\Models\Sigma\Head;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class TeamMenu extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='team_menus';
    protected $guarded=[];
    public $translationModel=TeamMenuTranslation::class;
    public $translatedAttributes = ['name','slug'];
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
