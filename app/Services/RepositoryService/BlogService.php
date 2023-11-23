<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class BlogService
{
    public function __construct(protected BlogRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5,['translations']);
    }

    public function store(BlogRequest $blogrequest)
    {
        $data=$blogrequest->all();
        $data['blog_img'] = $this->fileUploadService->uploadFile($blogrequest->blog_img, 'blog');

        $model= $this->repository->save($data,new Blog());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('blog_img')) {
            $data['blog_img'] = $this->fileUploadService->replaceFile($request->blog_img, $model->blog_img, 'blog_img');
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
        return Cache::rememberForever('blog',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('blog');
    }
}
