<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\VideoRequest;
use App\Models\Video;
use App\Services\RepositoryService\VideoService;


class VideoController extends Controller
{
    protected $route='video';
    public function __construct(protected VideoService $service)
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
    public function store(VideoRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Video $video)
    {
        return view('admin.'.$this->route.'.form',['model'=>$video]);
    }
    public function update(VideoRequest $request,Video $video)
    {
        $this->service->update($request,$video);
        return redirect()->back();
    }
    public function destroy(Video $video)
    {
        $this->service->delete($video);
        return redirect()->back();
    }

}
