<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\FocusRequest;
use App\Models\Landing\Focus;
use App\Services\RepositoryService\Landing\FocusService;


class FocusController extends Controller
{
    protected $route='landing.focus';
    public function __construct(protected FocusService $service)
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
    public function store(FocusRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Focus $focus)
    {
        return view('admin.'.$this->route.'.form',['model'=>$focus]);
    }
    public function update(FocusRequest $request,Focus $focus)
    {
        $this->service->update($request,$focus);
        return redirect()->back();
    }
    public function destroy(Focus $focus)
    {
        $this->service->delete($focus);
        return redirect()->back();
    }

}
