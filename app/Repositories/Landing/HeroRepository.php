<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Hero;
use App\Repositories\Abstract\AbstractRepository;

class HeroRepository extends AbstractRepository
{
    protected $modelClass=Hero::class;
}
