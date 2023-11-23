<?php

namespace App\Services\RepositoryService;

use App\Models\CompanyImage;
use App\Repositories\CompanyImageRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class CompanyImageService
{
    public function __construct(protected CompanyImageRepository $repository,
                                protected FileUploadService      $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10);
    }

    public function store($request)
    {
        $data=$request->all();

        $data['image']=$this->fileUploadService
            ->uploadFile($request->image,'company_images');

        $data['active']=$data['active'] ?? false;

        $model= $this->repository->save($data,new CompanyImage());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'company_images');
        }

        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        $this->fileUploadService->removeFile($model->image);
        return $this->repository->delete($model);
    }

    public function CachedCompanyImages()
    {
        return Cache::rememberForever('company_images',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('company_images');
    }
}
