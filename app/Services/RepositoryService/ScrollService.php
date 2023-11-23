<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\ScrollRequest;
use App\Models\Scroll;
use App\Repositories\ScrollRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class ScrollService
{
    public function __construct(protected ScrollRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5,['translations']);
    }

    public function store(ScrollRequest $scrollRequest)
    {
        $data=$scrollRequest->all();
        $data['slider_img'] = $this->fileUploadService->uploadFile($scrollRequest->slider_img, 'scroll');

        $model= $this->repository->save($data,new Scroll());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('slider_img')) {
            $data['slider_img'] = $this->fileUploadService->replaceFile($request->slider_img, $model->slider_img, 'scroll');
        }
        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedMenus()
    {
        return Cache::rememberForever('scroll',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('scroll');
    }

}
