<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\HeadSub;
use App\Repositories\Sigma\HeadSubRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class HeadSubService
{
    public function __construct(protected HeadSubRepository $repository,
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

        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'head_images');
        $data['icon']=$this->fileUploadService
            ->uploadFile($request->icon,'head_images');

//        $data['active']=$data['active'] ?? false;


        $model= $this->repository->save($data,new HeadSub());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'head_images');
        }
        if($request->has('icon')){
            $data['icon']=$this->fileUploadService
                ->replaceFile($request->icon,$model->icon,'head_images');
        }

//        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();

        if($model->image)
        $this->fileUploadService->removeFile($model->image);

        if($model->icon)
            $this->fileUploadService->removeFile($model->icon);

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('head_subs',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('head_subs');
    }
}
