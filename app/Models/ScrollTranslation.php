<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrollTranslation extends Model
{
    use HasFactory;

    protected $table='scroll_translations';
    protected $guarded=[];
    public $timestamps=false;
}
