<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Group;
use App\Repositories\Abstract\AbstractRepository;

class GroupRepository extends AbstractRepository
{
    protected $modelClass=Group::class;
}
