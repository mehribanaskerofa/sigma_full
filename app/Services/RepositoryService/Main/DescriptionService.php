<?php

namespace App\Services\RepositoryService\Main;

use App\Models\House;
use App\Repositories\HouseRepository;
use App\Services\FileUploadService;
use DOMDocument;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DescriptionService
{
    public function __construct(protected HouseRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate($projectId=0)
    {
        if ($projectId!=0){
            $houses=House::with(['block'=> function($query) use ($projectId){
                $query->with('project.translations','company.translations')->where('project_id',$projectId);
            }])->paginate(4);
//            dd($house[0]->block);
           return $houses;
        }



        return $this->repository->paginate(5,['translations','block.project.company.translations']);
    }

    public function store($request)
    {
        $data=$request->all();

        $data['image']=$this->fileUploadService
            ->uploadFile($request->layout,'house_layouts');
        $data['layout']=$this->fileUploadService
            ->uploadFile($request->layout,'house_layouts');

        $data['date']=$request->date ?? date('d-m-y');
        $data['active']=$data['active'] ?? false;

        $data['description']= $this->fileUploadService->descriptionUploadFile($request->description,'description_images');


        $model= $this->repository->save($data,new House());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'house_layouts');
        }
        if($request->has('layout')){
            $data['layout']=$this->fileUploadService
                ->replaceFile($request->layout,$model->layout,'house_layouts');
        }
        $data['active']=$data['active'] ?? false;
        $data['date']=$request->date ?? date('d-m-y');

        $description = $request->description;

        $data['description']= $this->fileUploadService->descriptionUploadFile($request->description,'description_images');


        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        $this->fileUploadService->removeFile($model->layout);
        $this->fileUploadService->descriptionRemoveFile($model->description);

        return $this->repository->delete($model);
    }

    public function CachedHouses()
    {
        return Cache::rememberForever('houses',
            function (){
                return $this->repository->all(with:['translations','block','project.translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('houses');
    }
}
