<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Banner;
use App\Repositories\Abstract\AbstractRepository;

class BannerRepository extends AbstractRepository
{
    protected $modelClass=Banner::class;
}
