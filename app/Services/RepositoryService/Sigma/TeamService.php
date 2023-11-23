<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Dev;
use App\Models\Sigma\Team;
use App\Repositories\Sigma\DevRepository;
use App\Repositories\Sigma\TeamRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class TeamService
{
    public function __construct(protected TeamRepository $repository,
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
            ->uploadFile($request->image,'team_images');

        $model= $this->repository->save($data,new Team());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'team_images');
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
        return Cache::rememberForever('teams',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('teams');
    }
}
