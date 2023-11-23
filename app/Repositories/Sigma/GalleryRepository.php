<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Appdev;
use App\Models\Sigma\Gallery;
use App\Repositories\Abstract\AbstractRepository;

class GalleryRepository extends AbstractRepository
{
    protected $modelClass=Gallery::class;
}
