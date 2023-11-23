<?php

namespace App\Repositories\Landing;

use App\Models\Landing\Solution;
use App\Repositories\Abstract\AbstractRepository;

class SolutionRepository extends AbstractRepository
{
    protected $modelClass=Solution::class;
}
