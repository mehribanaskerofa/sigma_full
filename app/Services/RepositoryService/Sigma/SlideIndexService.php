<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Head;
use App\Models\Sigma\SlideIndex;
use App\Repositories\Sigma\HeadRepository;
use App\Repositories\Sigma\SlideIndexRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class SlideIndexService
{
    public function __construct(protected SlideIndexRepository $repository,
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
            ->uploadFile($request->image,'slide_index_images');


        $model= $this->repository->save($data,new SlideIndex());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'slide_index_images');
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
        return Cache::rememberForever('slide_indexs',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('slide_indexs');
    }
}
