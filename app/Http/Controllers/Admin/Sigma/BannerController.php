<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\BannerRequest;
use App\Models\Sigma\Banner;
use App\Services\RepositoryService\Sigma\BannerService;

class BannerController extends Controller
{
    protected $route='banner';
    public function __construct(protected BannerService $service)
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
    public function store(BannerRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Banner $banner)
    {
        return view('admin.'.$this->route.'.form',['model'=>$banner]);
    }
    public function update(BannerRequest $request,Banner $banner)
    {
        $this->service->update($request,$banner);
        return redirect()->back();
    }
    public function destroy(Banner $banner)
    {
        $this->service->delete($banner);
        return redirect()->back();
    }

}
