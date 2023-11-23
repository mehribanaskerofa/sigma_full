<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Story;
use App\Repositories\Abstract\AbstractRepository;

class StoryRepository extends AbstractRepository
{
    protected $modelClass=Story::class;
}
