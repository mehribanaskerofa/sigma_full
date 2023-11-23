<?php

namespace App\Services\RepositoryService;
use App\Http\Requests\MonthfilterRequest;
use App\Models\Monthfilter;
use App\Repositories\MonthfilterRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class MonthfilterService
{

    public function __construct(protected MonthfilterRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(MonthfilterRequest $monthfilterrequest)
    {
        $data=$monthfilterrequest->all();
        $data['month_img'] = $this->fileUploadService->uploadFile($monthfilterrequest->month_img, 'month_img');

        $model= $this->repository->save($data,new Monthfilter());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('month_img')) {
            $data['month_img'] = $this->fileUploadService->replaceFile($request->month_img, $model->month_img, 'month_img');
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
        return Cache::rememberForever('monthfilter',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('monthfilter');
    }
}
