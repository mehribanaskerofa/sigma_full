<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Story;
use App\Repositories\Landing\StoryRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class StoryService
{
    public function __construct(protected StoryRepository $repository,
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
            ->uploadFile($request->image,'story_images');


        $model= $this->repository->save($data,new Story());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'story_images');
        }
        if($request->has('icon1')){
            $data['icon1']=$this->fileUploadService
                ->replaceFile($request->icon1,$model->icon1,'story_images');
        }
        if($request->has('icon2')){
            $data['icon2']=$this->fileUploadService
                ->replaceFile($request->icon2,$model->icon2,'story_images');
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

        if($model->icon1)
            $this->fileUploadService->removeFile($model->icon1);
        if($model->icon2)
            $this->fileUploadService->removeFile($model->icon2);

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('story',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('story');
    }
}
