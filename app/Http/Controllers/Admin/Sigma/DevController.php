<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\DevRequest;
use App\Models\Sigma\Dev;
use App\Services\RepositoryService\Sigma\DevService;

class DevController extends Controller
{
    protected $route='dev';
    public function __construct(protected DevService $service)
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
    public function store(DevRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Dev $dev)
    {
        return view('admin.'.$this->route.'.form',['model'=>$dev]);
    }
    public function update(DevRequest $request,Dev $dev)
    {
        $this->service->update($request,$dev);
        return redirect()->back();
    }
    public function destroy(Dev $dev)
    {
        $this->service->delete($dev);
        return redirect()->back();
    }

}
