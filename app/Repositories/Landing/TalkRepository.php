<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Talk;
use App\Repositories\Abstract\AbstractRepository;

class TalkRepository extends AbstractRepository
{
    protected $modelClass=Talk::class;
}
