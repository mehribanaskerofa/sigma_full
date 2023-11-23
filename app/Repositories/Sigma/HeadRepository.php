<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Head;
use App\Repositories\Abstract\AbstractRepository;

class HeadRepository extends AbstractRepository
{
    protected $modelClass=Head::class;
}
