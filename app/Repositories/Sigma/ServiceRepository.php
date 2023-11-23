<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Head;
use App\Models\Sigma\Service;
use App\Repositories\Abstract\AbstractRepository;

class ServiceRepository extends AbstractRepository
{
    protected $modelClass=Service::class;
}
