<?php

namespace App\Repositories\Sigma;

use App\Models\Sigma\Faq;
use App\Repositories\Abstract\AbstractRepository;

class FaqRepository extends AbstractRepository
{
    protected $modelClass=Faq::class;
}
