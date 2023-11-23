<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Start;
use App\Repositories\Landing\StartRepository;
use Illuminate\Support\Facades\Cache;

class StartService
{
    public function __construct(protected StartRepository $repository)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10,['translations']);
    }

    public function store($request)
    {
        $data=$request->all();

        $model= $this->repository->save($data,new Start());

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

    public function Cached()
    {
        return Cache::rememberForever('starts',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('starts');
    }
}
