<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Longside;
use App\Repositories\Abstract\AbstractRepository;

class LongsideRepository extends AbstractRepository
{
    protected $modelClass=Longside::class;
}
