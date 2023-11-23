<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\ServiceRequest;
use App\Models\Sigma\Service;
use App\Services\RepositoryService\Sigma\ServiceService;

class ServiceController extends Controller
{
    protected $route='service';
    public function __construct(protected ServiceService $service)
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
    public function store(ServiceRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Service $service)
    {
//        $projects=$this->projectService->CachedProjects();
        return view('admin.'.$this->route.'.form',['model'=>$service]);
//            ,'projects'=>$projects]);
    }
    public function update(ServiceRequest $request,Service $service)
    {
        $this->service->update($request,$service);
        return redirect()->back();
    }
    public function destroy(Service $service)
    {
        $this->service->delete($service);
        return redirect()->back();
    }

}
