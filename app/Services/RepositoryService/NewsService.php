<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Repositories\NewsRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class NewsService
{
    public function __construct(protected NewsRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(6,['translations']);
    }

    public function store(NewsRequest $request)
    {
        $data=$request->all();

        $data['image'] = $this->fileUploadService->uploadFile($request->image, 'news');
        $data['active']=$data['active'] ?? false;


        $model= $this->repository->save($data,new News());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'news');
        }
        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();

        if($model->image)
            $this->fileUploadService->removeFile($model->image);

        return $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('news',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('news');
    }
}
