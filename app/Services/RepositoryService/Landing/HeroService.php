<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Hero;
use App\Repositories\Landing\HeroRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class HeroService
{
    public function __construct(protected HeroRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10,['translations']);
    }

    public function store($request)
    {
        $data=$request->all();


        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'heros_images');

        $data['video']=$this->fileUploadService
            ->uploadFile($request->video,'heros_videos');


        $model= $this->repository->save($data,new Hero());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'heros_images');
        }
        if($request->has('video')){
            $data['video']=$this->fileUploadService
                ->replaceFile($request->video,$model->video,'heros_videos');
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
        if($model->video)
            $this->fileUploadService->removeFile($model->video);

        return $this->repository->delete($model);
    }

    public function CachedAdvs()
    {
        return Cache::rememberForever('heros',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('heros');
    }
}
