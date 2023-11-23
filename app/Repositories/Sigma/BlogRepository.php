<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Appdev;
use App\Models\Sigma\Blog;
use App\Repositories\Abstract\AbstractRepository;

class BlogRepository extends AbstractRepository
{
    protected $modelClass=Blog::class;
}
