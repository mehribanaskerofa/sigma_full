<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Expertise;
use App\Repositories\Sigma\ExpertiseRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class ExpertiseService
{
    public function __construct(protected ExpertiseRepository $repository,
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
            ->uploadFile($request->image,'expertise_images');

//        $data['active']=$data['active'] ?? false;


        $model= $this->repository->save($data,new Expertise());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'expertise_images');
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

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('expertises',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('expertises');
    }
}
