<?php

namespace App\Services\RepositoryService\Landing;

use App\Models\Landing\TeamMenu;
use App\Repositories\Landing\TeamMenuRepository;
use Illuminate\Support\Facades\Cache;

class TeamMenuService
{
    public function __construct(protected TeamMenuRepository $repository)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5,['translations']);
    }
    public function dataAllWithoutPaginate()
    {
        return $this->repository->all(['translations']);
    }

    public function store($request)
    {
        $data=$request->all();


        $model= $this->repository->save($data,new TeamMenu());

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
        return $this->repository->delete($model);
    }

    public function CachedMenus()
    {
        return Cache::rememberForever('team_menus',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('team_menus');
    }
}
