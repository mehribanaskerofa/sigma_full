<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Need1;
use App\Models\Sigma\Faq;
use App\Repositories\Landing\Need1Repository;
use App\Repositories\Sigma\FaqRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class Need1Service
{
    public function __construct(protected Need1Repository $repository,
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
            ->uploadFile($request->image,'need1s_images');


        $model= $this->repository->save($data,new Need1());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'need1s_images');
        }

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();

        if($model->image)
            $this->fileUploadService->removeFile($model->image);

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('need1s',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('need1s');
    }
}
