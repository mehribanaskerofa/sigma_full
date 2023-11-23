<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Repositories\Abstract\AbstractRepository;

class BlogRepository extends AbstractRepository
{
    protected $modelClass=Blog::class;

}
