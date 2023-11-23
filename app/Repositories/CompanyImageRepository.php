<?php

namespace App\Repositories;

use App\Models\CompanyImage;
use App\Repositories\Abstract\AbstractRepository;

class CompanyImageRepository extends AbstractRepository
{
    protected $modelClass=CompanyImage::class;
}
