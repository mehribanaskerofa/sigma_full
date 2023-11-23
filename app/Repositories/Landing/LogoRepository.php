<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Logo;
use App\Repositories\Abstract\AbstractRepository;

class LogoRepository extends AbstractRepository
{
    protected $modelClass=Logo::class;
}
