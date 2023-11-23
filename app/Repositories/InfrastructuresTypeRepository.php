<?php

namespace App\Repositories;

use App\Models\Infrastructure;
use App\Models\InfraType;
use App\Repositories\Abstract\AbstractRepository;

class InfrastructuresTypeRepository extends AbstractRepository
{
    protected $modelClass=InfraType::class;
}
