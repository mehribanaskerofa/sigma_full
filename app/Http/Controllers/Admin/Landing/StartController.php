<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\StartRequest;
use App\Models\Landing\Start;
use App\Services\RepositoryService\Landing\StartService;


class StartController extends Controller
{
    protected $route='landing.start';
    public function __construct(protected StartService $service)
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
    public function store(StartRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Start $start)
    {
        return view('admin.'.$this->route.'.form',['model'=>$start]);
    }
    public function update(StartRequest $request,Start $start)
    {
        $this->service->update($request,$start);
        return redirect()->back();
    }
    public function destroy(Start $start)
    {
        $this->service->delete($start);
        return redirect()->back();
    }

}
