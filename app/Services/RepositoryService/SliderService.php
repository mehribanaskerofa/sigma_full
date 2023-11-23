<?php

namespace App\Services\RepositoryService;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Repositories\SliderRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
class SliderService
{

    public function __construct(protected SliderRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5,['translations']);
    }

    public function store(SliderRequest $request)
    {
//        dd($sliderRequest);
        $data=$request->all();
        $data['slider_img']=$this->fileUploadService->uploadFile($request->slider_img,'slider');

//        $data['slider_img'] = $this->fileUploadService->uploadFile($sliderRequest->slider_img, 'slider');

        $model= $this->repository->save($data,new Slider());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('slider_img')) {
            $data['slider_img'] = $this->fileUploadService->replaceFile($request->slider_img, $model->image, 'slider');
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
        return Cache::rememberForever('menus',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('slider');
    }
}
