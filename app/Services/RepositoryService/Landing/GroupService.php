<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\Group;
use App\Repositories\Landing\GroupRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class GroupService
{
    public function __construct(protected GroupRepository $repository,
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
            ->uploadFile($request->image,'groups_images');


        $model= $this->repository->save($data,new Group());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'groups_images');
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
        return Cache::rememberForever('groups',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('groups');
    }
}
