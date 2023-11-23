<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Section;
use App\Repositories\Abstract\AbstractRepository;

class SectionRepository extends AbstractRepository
{
    protected $modelClass=Section::class;
}
