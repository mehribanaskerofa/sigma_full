<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\HeadCounter;
use App\Repositories\Sigma\HeadCounterRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class HeadCounterService
{
    public function __construct(protected HeadCounterRepository $repository,
                                protected FileUploadService $fileUploadService)
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

        $model= $this->repository->save($data,new HeadCounter());

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
        return Cache::rememberForever('head_counters',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('head_counters');
    }
}
