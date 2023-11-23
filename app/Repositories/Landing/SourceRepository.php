<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Source;
use App\Repositories\Abstract\AbstractRepository;

class SourceRepository extends AbstractRepository
{
    protected $modelClass=Source::class;
}
