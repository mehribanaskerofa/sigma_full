<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Philosophy;
use App\Repositories\Sigma\PhilosophyRepository;
use Illuminate\Support\Facades\Cache;

class PhilosophyService
{
    public function __construct(protected PhilosophyRepository $repository)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5,['translations']);
    }
    public function dataAllWithOutPaginate()
    {
        return $this->repository->all(['translations']);
    }

    public function store($request)
    {
        $data=$request->all();

        $model= $this->repository->save($data,new Philosophy());

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

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('philosophys',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('philosophys');
    }
}
