<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Cases;
use App\Repositories\Abstract\AbstractRepository;

class CasesRepository extends AbstractRepository
{
    protected $modelClass=Cases::class;
}
