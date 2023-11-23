<?php

namespace App\Repositories;

use App\Models\Adv;
use App\Repositories\Abstract\AbstractRepository;

class AdvRepository extends AbstractRepository
{
    protected $modelClass=Adv::class;
}
