<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\HeadIndexRequest;
use App\Models\Sigma\HeadIndex;
use App\Services\RepositoryService\Sigma\HeadIndexService;

class HeadIndexController extends Controller
{
    protected $route='head-index';
    public function __construct(protected HeadIndexService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.'.$this->route.'.index',['models'=>$models]);
    }
    public function create()
    {
//        $projects=$this->projectService->CachedProjects();
        return view('admin.'.$this->route.'.form');
//            ,compact('projects'));
    }
    public function store(HeadIndexRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(HeadIndex $headIndex)
    {
//        $projects=$this->projectService->CachedProjects();
        return view('admin.'.$this->route.'.form',['model'=>$headIndex]);
//            ,'projects'=>$projects]);
    }
    public function update(HeadIndexRequest $request,HeadIndex $headIndex)
    {
        $this->service->update($request,$headIndex);
        return redirect()->back();
    }
    public function destroy(HeadIndex $headIndex)
    {
        $this->service->delete($headIndex);
        return redirect()->back();
    }

}
