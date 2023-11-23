<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Dev;
use App\Repositories\Sigma\DevRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class DevService
{
    public function __construct(protected DevRepository $repository,
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

        $data['icon']=$this->fileUploadService
            ->uploadFile($request->icon,'dev_images');

        $model= $this->repository->save($data,new Dev());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('icon')){
            $data['icon']=$this->fileUploadService
                ->replaceFile($request->icon,$model->icon,'dev_images');
        }

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();

        if($model->icon)
            $this->fileUploadService->removeFile($model->icon);

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('devs',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('devs');
    }
}
