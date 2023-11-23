<?php

namespace App\Services\RepositoryService\Sigma;

use App\Models\Sigma\Faq;
use App\Repositories\Sigma\FaqRepository;
use Illuminate\Support\Facades\Cache;

class FaqService
{
    public function __construct(protected FaqRepository $repository)
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

        $model= $this->repository->save($data,new Faq());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();

        $this->repository->delete($model);
    }

    public function Cached()
    {
        return Cache::rememberForever('faqs',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('faqs');
    }
}
