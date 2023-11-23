<?php

namespace App\Repositories;

use App\Models\Slider;
use App\Repositories\Abstract\AbstractRepository;

class SliderRepository extends AbstractRepository
{
    protected $modelClass=Slider::class;

}
