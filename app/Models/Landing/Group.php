<?php

namespace App\Models\Landing;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Group extends Model
{
    protected $table='groups';
    protected $guarded=[];
}
