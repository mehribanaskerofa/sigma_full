<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\ExpertiseRequest;
use App\Models\Sigma\Expertise;
use App\Services\RepositoryService\ProjectService;
use App\Services\RepositoryService\Sigma\ExpertiseService;

class ExpertiseController extends Controller
{
    protected $route='expertise';
    protected ProjectService $projectService;
    public function __construct(protected ExpertiseService $service)
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
    public function store(ExpertiseRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Expertise $expertise)
    {
//        $projects=$this->projectService->CachedProjects();
        return view('admin.'.$this->route.'.form',['model'=>$expertise]);
//            ,'projects'=>$projects]);
    }
    public function update(ExpertiseRequest $request,Expertise $expertise)
    {
        $this->service->update($request,$expertise);
        return redirect()->back();
    }
    public function destroy(Expertise $expertise)
    {
        $this->service->delete($expertise);
        return redirect()->back();
    }

}
