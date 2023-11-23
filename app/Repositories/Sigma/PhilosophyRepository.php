<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Philosophy;
use App\Repositories\Abstract\AbstractRepository;

class PhilosophyRepository extends AbstractRepository
{
    protected $modelClass=Philosophy::class;
}
