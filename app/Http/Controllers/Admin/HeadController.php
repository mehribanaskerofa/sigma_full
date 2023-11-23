<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\HeadRequest;
use App\Models\Sigma\Head;
use App\Services\RepositoryService\ProjectService;
use App\Services\RepositoryService\Sigma\HeadService;

class HeadController extends Controller
{
    protected $route='head';
    protected ProjectService $projectService;
    public function __construct(protected HeadService $service)
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
    public function store(HeadRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Head $head)
    {
//        $projects=$this->projectService->CachedProjects();
        return view('admin.'.$this->route.'.form',['model'=>$head]);
//            ,'projects'=>$projects]);
    }
    public function update(HeadRequest $request,Head $head)
    {
        $this->service->update($request,$head);
        return redirect()->back();
    }
    public function destroy(Head $head)
    {
        $this->service->delete($head);
        return redirect()->back();
    }
//    public function status($id)
//    {
//        $model = House::find($id);
//
//        $model->active = request()->active;
//        $model->save();
//
//        return response()->json(['success'=>'Status change successfully.']);
//    }

//    public function getBlocksByProject($projectId){
////        dd($projectId);
//        $blocks=Block::query()->where('project_id',$projectId)->get();
////        dd($blocks);
//        return view('admin.house.block-items',compact('blocks'));
//    }
}
