<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScrollRequest;
use App\Models\Scroll;
use App\Services\RepositoryService\ScrollService;

class ScrollController extends Controller
{

    public function __construct(protected ScrollService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.scroll.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.scroll.form');
    }
    public function store(ScrollRequest $scrollRequest)
    {
        $this->service->store($scrollRequest);
        return redirect()->route('admin.scroll.index');
    }
    public function edit(Scroll $scroll)
    {
        return view('admin.scroll.form',['model'=>$scroll]);
    }
    public function update(ScrollRequest $ScrollRequest, Scroll $scroll)
    {
        $this->service->update($ScrollRequest,$scroll);
        return redirect()->back();
    }
    public function destroy(Scroll $scroll)
    {
        $this->service->delete($scroll);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = Scroll::find($id);
        $model->active = request()->active;
        $model->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
