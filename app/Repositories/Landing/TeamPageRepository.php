<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\TeamPage;
use App\Repositories\Abstract\AbstractRepository;

class TeamPageRepository extends AbstractRepository
{
    protected $modelClass=TeamPage::class;
}
