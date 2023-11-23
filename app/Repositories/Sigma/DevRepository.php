<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Dev;
use App\Repositories\Abstract\AbstractRepository;

class DevRepository extends AbstractRepository
{
    protected $modelClass=Dev::class;
}
