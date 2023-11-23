<?php

namespace App\Services\RepositoryService;

use App\Models\Company;
use App\Models\Image;
use App\Models\Project;
use App\Repositories\ImageRepository;
use App\Repositories\ProjectRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class ImageService
{
    public function __construct(protected ImageRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->groupBy('imageable_type',['translations'],6);
    }

    public function store($request)
    {
        $data=$request->all();

        $company = Company::find($request->company_id);
        if($company){
            $data['image']=$this->fileUploadService
                ->uploadFile($request->image,'image_images');
        }
        unset($data['company_id']);

        $company->images()->create($data);

        self::ClearCached();
        return $company;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'image_images');
        }

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

    public function CachedImages()
    {
        return Cache::rememberForever('images',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('images');
    }
}
