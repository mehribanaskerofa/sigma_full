<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\AlbumRequest;
use App\Models\Landing\Album;
use App\Services\RepositoryService\Landing\AlbumService;


class AlbumController extends Controller
{
    protected $route='landing.album';
    public function __construct(protected AlbumService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.'.$this->route.'.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.'.$this->route.'.form');
    }
    public function store(AlbumRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Album $album)
    {
        return view('admin.'.$this->route.'.form',['model'=>$album]);
    }
    public function update(AlbumRequest $request,Album $album)
    {
        $this->service->update($request,$album);
        return redirect()->back();
    }
    public function destroy(Album $album)
    {
        $this->service->delete($album);
        return redirect()->back();
    }

}
