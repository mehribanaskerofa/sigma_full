<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\LongsideRequest;
use App\Models\Landing\Longside;
use App\Services\RepositoryService\Landing\LongsideService;


class LongsideController extends Controller
{
    protected $route='landing.longside';
    public function __construct(protected LongsideService $service)
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
    public function store(LongsideRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Longside $longside)
    {
        return view('admin.'.$this->route.'.form',['model'=>$longside]);
    }
    public function update(LongsideRequest $request,Longside $longside)
    {
        $this->service->update($request,$longside);
        return redirect()->back();
    }
    public function destroy(Longside $longside)
    {
        $this->service->delete($longside);
        return redirect()->back();
    }

}
