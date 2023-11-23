<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Appdev;
use App\Models\Sigma\Principle;
use App\Repositories\Abstract\AbstractRepository;

class PrincipleRepository extends AbstractRepository
{
    protected $modelClass=Principle::class;
}
