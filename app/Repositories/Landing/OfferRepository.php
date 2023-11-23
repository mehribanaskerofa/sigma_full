<?php

namespace App\Repositories\Landing;

use App\Models\Adv;
use App\Models\Landing\Offer;
use App\Repositories\Abstract\AbstractRepository;

class OfferRepository extends AbstractRepository
{
    protected $modelClass=Offer::class;
}
