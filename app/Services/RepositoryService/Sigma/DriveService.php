<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Drive;
use App\Repositories\Sigma\DriveRepository;
use Illuminate\Support\Facades\Cache;

class DriveService
{
    public function __construct(protected DriveRepository $repository)
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

        $model= $this->repository->save($data,new Drive());

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
        return Cache::rememberForever('drives',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('drives');
    }
}
