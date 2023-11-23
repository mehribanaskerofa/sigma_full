<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\SolutionRequest;
use App\Models\Landing\Solution;
use App\Services\RepositoryService\Landing\SolutionService;


class SolutionController extends Controller
{
    protected $route='landing.solution';
    public function __construct(protected SolutionService $service)
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
    public function store(SolutionRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Solution $solution)
    {
        return view('admin.'.$this->route.'.form',['model'=>$solution]);
    }
    public function update(SolutionRequest $request,Solution $solution)
    {
        $this->service->update($request,$solution);
        return redirect()->back();
    }
    public function destroy(Solution $solution)
    {
        $this->service->delete($solution);
        return redirect()->back();
    }

}
