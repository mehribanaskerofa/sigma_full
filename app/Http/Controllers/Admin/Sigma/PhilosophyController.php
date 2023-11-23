<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\PhilosophyRequest;
use App\Models\Sigma\Philosophy;
use App\Services\RepositoryService\Sigma\PhilosophyService;

class PhilosophyController extends Controller
{
    protected $route='philosophy';
    public function __construct(protected PhilosophyService $service)
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
    public function store(PhilosophyRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Philosophy $philosophy)
    {
        return view('admin.'.$this->route.'.form',['model'=>$philosophy]);
    }
    public function update(PhilosophyRequest $request,Philosophy $philosophy)
    {
        $this->service->update($request,$philosophy);
        return redirect()->back();
    }
    public function destroy(Philosophy $philosophy)
    {
        $this->service->delete($philosophy);
        return redirect()->back();
    }

}
