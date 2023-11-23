<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\PrincipleRequest;
use App\Models\Sigma\Principle;
use App\Services\RepositoryService\Sigma\PrincipleService;

class PrincipleController extends Controller
{
    protected $route='principle';
    public function __construct(protected PrincipleService $service)
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
    public function store(PrincipleRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Principle $principle)
    {
        return view('admin.'.$this->route.'.form',['model'=>$principle]);
    }
    public function update(PrincipleRequest $request,Principle $principle)
    {
        $this->service->update($request,$principle);
        return redirect()->back();
    }
    public function destroy(Principle $principle)
    {
        $this->service->delete($principle);
        return redirect()->back();
    }

}
