<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Head;
use App\Models\Sigma\HeadIndex;
use App\Repositories\Abstract\AbstractRepository;

class HeadIndexRepository extends AbstractRepository
{
    protected $modelClass=HeadIndex::class;
}
