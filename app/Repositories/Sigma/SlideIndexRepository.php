<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Head;
use App\Models\Sigma\SlideIndex;
use App\Repositories\Abstract\AbstractRepository;

class SlideIndexRepository extends AbstractRepository
{
    protected $modelClass=SlideIndex::class;
}
