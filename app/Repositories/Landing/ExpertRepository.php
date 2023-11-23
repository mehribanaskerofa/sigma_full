<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Expert;
use App\Repositories\Abstract\AbstractRepository;

class ExpertRepository extends AbstractRepository
{
    protected $modelClass=Expert::class;
}
