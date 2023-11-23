<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Logo;
use App\Repositories\Landing\LogoRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class LogoService
{
    public function __construct(protected LogoRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }
    public function dataAllWithOutPaginate()
    {
        return $this->repository->all();
    }

    public function store($request)
    {
        $data=$request->all();

        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'logos_images');


        $model= $this->repository->save($data,new Logo());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'logos_images');
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
        return Cache::rememberForever('logos',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('logos');
    }
}
