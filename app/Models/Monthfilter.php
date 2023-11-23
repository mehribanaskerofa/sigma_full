<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthfilter extends Model
{
    use HasFactory;
    protected $table='monthfilter';
    protected $fillable=['live-cam','month_img', 'month_date'];

    protected $guarded=[];
}
