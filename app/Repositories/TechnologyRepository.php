<?php

namespace App\Repositories;

use App\Models\Adv;
use App\Models\Technology;
use App\Models\Video;
use App\Repositories\Abstract\AbstractRepository;

class TechnologyRepository extends AbstractRepository
{
    protected $modelClass=Technology::class;
}
