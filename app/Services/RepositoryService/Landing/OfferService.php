<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Offer;
use App\Repositories\Landing\OfferRepository;
use Illuminate\Support\Facades\Cache;

class OfferService
{
    public function __construct(protected OfferRepository $repository)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10,['translations']);
    }

    public function store($request)
    {
        $data=$request->all();

        $model= $this->repository->save($data,new Offer());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();


        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedAdvs()
    {
        return Cache::rememberForever('offers',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('offers');
    }
}
