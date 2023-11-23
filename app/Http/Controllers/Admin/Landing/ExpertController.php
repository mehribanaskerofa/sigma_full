<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\ExpertRequest;
use App\Models\Landing\Expert;
use App\Services\RepositoryService\Landing\ExpertService;


class ExpertController extends Controller
{
    protected $route='landing.expert';
    public function __construct(protected ExpertService $service)
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
    public function store(ExpertRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Expert $expert)
    {
        return view('admin.'.$this->route.'.form',['model'=>$expert]);
    }
    public function update(ExpertRequest $request,Expert $expert)
    {
        $this->service->update($request,$expert);
        return redirect()->back();
    }
    public function destroy(Expert $expert)
    {
        $this->service->delete($expert);
        return redirect()->back();
    }

}
