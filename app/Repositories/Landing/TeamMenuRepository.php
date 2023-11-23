<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\TeamMenu;
use App\Repositories\Abstract\AbstractRepository;

class TeamMenuRepository extends AbstractRepository
{
    protected $modelClass=TeamMenu::class;
}
