<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Expertise;
use App\Models\Sigma\Head;
use App\Repositories\Abstract\AbstractRepository;

class ExpertiseRepository extends AbstractRepository
{
    protected $modelClass=Expertise::class;
}
