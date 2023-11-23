<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\HeadSubRequest;
use App\Models\Sigma\HeadSub;
use App\Services\RepositoryService\Sigma\HeadSubService;

class HeadSubController extends Controller
{
    protected $route='head-sub';
    public function __construct(protected HeadSubService $service)
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
    public function store(HeadSubRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(HeadSub $headSub)
    {
        return view('admin.'.$this->route.'.form',['model'=>$headSub]);
    }
    public function update(HeadSubRequest $request,HeadSub $headSub)
    {
        $this->service->update($request,$headSub);
        return redirect()->back();
    }
    public function destroy(HeadSub $headSub)
    {
        $this->service->delete($headSub);
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
