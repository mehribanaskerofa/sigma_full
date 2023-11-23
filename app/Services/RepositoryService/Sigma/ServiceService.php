<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Head;
use App\Models\Sigma\HeadIndex;
use App\Models\Sigma\Service;
use App\Repositories\Sigma\HeadIndexRepository;
use App\Repositories\Sigma\HeadRepository;
use App\Repositories\Sigma\ServiceRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class ServiceService
{
    public function __construct(protected ServiceRepository $repository)
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

        $model= $this->repository->save($data,new Service());

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
        return Cache::rememberForever('services',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('services');
    }
}
