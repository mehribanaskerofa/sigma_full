<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Appdev;
use App\Models\Sigma\Recognition;
use App\Repositories\Abstract\AbstractRepository;

class RecognitionRepository extends AbstractRepository
{
    protected $modelClass=Recognition::class;
}
