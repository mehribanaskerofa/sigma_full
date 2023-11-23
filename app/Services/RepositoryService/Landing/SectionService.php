<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Section;
use App\Repositories\Landing\SectionRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class SectionService
{
    public function __construct(protected SectionRepository $repository,
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
            ->uploadFile($request->image,'section_images');


        $model= $this->repository->save($data,new Section());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'section_images');
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
        return Cache::rememberForever('section',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('section');
    }
}
