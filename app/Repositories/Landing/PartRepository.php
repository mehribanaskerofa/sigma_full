<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Part;
use App\Repositories\Abstract\AbstractRepository;

class PartRepository extends AbstractRepository
{
    protected $modelClass=Part::class;
}
