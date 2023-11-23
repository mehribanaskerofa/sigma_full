<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Principle;
use App\Repositories\Sigma\PrincipleRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class PrincipleService
{
    public function __construct(protected PrincipleRepository $repository,
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

        $data['image1']=$this->fileUploadService
            ->uploadFile($request->image1,'principle_images');
        $data['image2']=$this->fileUploadService
            ->uploadFile($request->image2,'principle_images');
        $data['image3']=$this->fileUploadService
            ->uploadFile($request->image3,'principle_images');

//        $data['active']=$data['active'] ?? false;


        $model= $this->repository->save($data,new Principle());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image1')){
            $data['image1']=$this->fileUploadService
                ->replaceFile($request->image1,$model->image1,'principle_images');
        }
        if($request->has('image2')){
            $data['image2']=$this->fileUploadService
                ->replaceFile($request->image2,$model->image2,'principle_images');
        }
        if($request->has('image3')){
            $data['image3']=$this->fileUploadService
                ->replaceFile($request->image3,$model->image3,'principle_images');
        }

//        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();

        if($model->image1)
        $this->fileUploadService->removeFile($model->image1);
        if($model->image2)
            $this->fileUploadService->removeFile($model->image2);
        if($model->image3)
            $this->fileUploadService->removeFile($model->image3);

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('principles',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('principles');
    }
}
