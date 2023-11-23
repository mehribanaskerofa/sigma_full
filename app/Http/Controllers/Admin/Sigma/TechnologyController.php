<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\TechnologyRequest;
use App\Models\Technology;
use App\Services\RepositoryService\TechnologyService;


class TechnologyController extends Controller
{
    protected $route='technology';
    public function __construct(protected TechnologyService $service)
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
    public function store(TechnologyRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Technology $technology)
    {
        return view('admin.'.$this->route.'.form',['model'=>$technology]);
    }
    public function update(TechnologyRequest $request,Technology $technology)
    {
        $this->service->update($request,$technology);
        return redirect()->back();
    }
    public function destroy(Technology $technology)
    {
        $this->service->delete($technology);
        return redirect()->back();
    }

}
