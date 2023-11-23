<?php

namespace App\Services\RepositoryService;

use App\Models\Adv;
use App\Repositories\AdvRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class AdvService
{
    public function __construct(protected AdvRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(['translations'],6);
    }

    public function store($request)
    {
        $data=$request->all();

        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'adv_images');


        $model= $this->repository->save($data,new Adv());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'adv_images');
        }

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        $this->fileUploadService->removeFile($model->image);
        return $this->repository->delete($model);
    }

    public function CachedAdvs()
    {
        return Cache::rememberForever('advs',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('advs');
    }
}
