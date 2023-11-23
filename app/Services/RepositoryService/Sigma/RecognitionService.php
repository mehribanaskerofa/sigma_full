<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Recognition;
use App\Repositories\Sigma\RecognitionRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class RecognitionService
{
    public function __construct(protected RecognitionRepository $repository,
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

        $data['logo']=$this->fileUploadService
            ->uploadFile($request->logo,'logos');

//        $data['active']=$data['active'] ?? false;


        $model= $this->repository->save($data,new Recognition());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('logo')){
            $data['logo']=$this->fileUploadService
                ->replaceFile($request->logo,$model->logo,'logos');
        }

//        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();

        if($model->logo)
        $this->fileUploadService->removeFile($model->logg);

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('recognitions',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('recognitions');
    }
}
