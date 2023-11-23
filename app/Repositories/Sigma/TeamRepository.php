<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Appdev;
use App\Models\Sigma\Team;
use App\Repositories\Abstract\AbstractRepository;

class TeamRepository extends AbstractRepository
{
    protected $modelClass=Team::class;
}
