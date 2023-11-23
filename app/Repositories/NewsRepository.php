<?php

namespace App\Repositories;
use App\Models\News;

use App\Repositories\Abstract\AbstractRepository;

class NewsRepository extends AbstractRepository
{
    protected $modelClass=News::class;

}
