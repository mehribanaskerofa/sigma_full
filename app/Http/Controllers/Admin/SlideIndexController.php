<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\SlideIndexRequest;
use App\Models\Sigma\SlideIndex;
use App\Services\RepositoryService\ProjectService;
use App\Services\RepositoryService\Sigma\SlideIndexService;

class SlideIndexController extends Controller
{
    protected $route='slide-index';
    protected ProjectService $projectService;
    public function __construct(protected SlideIndexService $service)
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
    public function store(SlideIndexRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(SlideIndex $slideIndex)
    {
//        $projects=$this->projectService->CachedProjects();
        return view('admin.'.$this->route.'.form',['model'=>$slideIndex]);
//            ,'projects'=>$projects]);
    }
    public function update(SlideIndexRequest $request,SlideIndex $slideIndex)
    {
        $this->service->update($request,$slideIndex);
        return redirect()->back();
    }
    public function destroy(SlideIndex $slideIndex)
    {
        $this->service->delete($slideIndex);
        return redirect()->back();
    }

}
