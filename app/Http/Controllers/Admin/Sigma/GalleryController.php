<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\GalleryRequest;
use App\Models\Sigma\Gallery;
use App\Services\RepositoryService\Sigma\GalleryService;

class GalleryController extends Controller
{
    protected $route='gallery';
    public function __construct(protected GalleryService $service)
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
    public function store(GalleryRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Gallery $gallery)
    {
        return view('admin.'.$this->route.'.form',['model'=>$gallery]);
    }
    public function update(GalleryRequest $request,Gallery $gallery)
    {
        $this->service->update($request,$gallery);
        return redirect()->back();
    }
    public function destroy(Gallery $gallery)
    {
        $this->service->delete($gallery);
        return redirect()->back();
    }

}
