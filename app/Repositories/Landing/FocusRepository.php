<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Focus;
use App\Repositories\Abstract\AbstractRepository;

class FocusRepository extends AbstractRepository
{
    protected $modelClass=Focus::class;
}
