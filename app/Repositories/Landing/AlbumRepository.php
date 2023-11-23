<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Album;
use App\Repositories\Abstract\AbstractRepository;

class AlbumRepository extends AbstractRepository
{
    protected $modelClass=Album::class;
}
