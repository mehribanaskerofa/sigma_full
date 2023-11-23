<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Video;
use App\Repositories\Abstract\AbstractRepository;

class VideoRepository extends AbstractRepository
{
    protected $modelClass=Video::class;
}
