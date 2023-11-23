<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\HeadCounterRequest;
use App\Models\Sigma\HeadCounter;
use App\Services\RepositoryService\Sigma\HeadCounterService;

class HeadCounterController extends Controller
{
    protected $route='head-counter';
    public function __construct(protected HeadCounterService $service)
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
    public function store(HeadCounterRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(HeadCounter $headCounter)
    {
        return view('admin.'.$this->route.'.form',['model'=>$headCounter]);
    }
    public function update(HeadCounterRequest $request,HeadCounter $headCounter)
    {
        $this->service->update($request,$headCounter);
        return redirect()->back();
    }
    public function destroy(HeadCounter $headCounter)
    {
        $this->service->delete($headCounter);
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
