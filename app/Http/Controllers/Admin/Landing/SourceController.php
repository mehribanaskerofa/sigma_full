<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\SourceRequest;
use App\Models\Landing\Source;
use App\Services\RepositoryService\Landing\SourceService;


class SourceController extends Controller
{
    protected $route='landing.source';
    public function __construct(protected SourceService $service)
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
    public function store(SourceRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Source $source)
    {
        return view('admin.'.$this->route.'.form',['model'=>$source]);
    }
    public function update(SourceRequest $request,Source $source)
    {
        $this->service->update($request,$source);
        return redirect()->back();
    }
    public function destroy(Source $source)
    {
        $this->service->delete($source);
        return redirect()->back();
    }

}
