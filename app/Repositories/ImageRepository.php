<?php

namespace App\Repositories;

use App\Models\Image;
use App\Repositories\Abstract\AbstractRepository;

class ImageRepository extends AbstractRepository
{
    protected $modelClass=Image::class;
}
