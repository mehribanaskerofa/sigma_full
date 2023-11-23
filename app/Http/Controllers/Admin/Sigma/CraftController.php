<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\CraftRequest;
use App\Models\Sigma\Craft;
use App\Services\RepositoryService\Sigma\CraftService;

class CraftController extends Controller
{
    protected $route='craft';
    public function __construct(protected CraftService $service)
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
    public function store(CraftRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Craft $craft)
    {
        return view('admin.'.$this->route.'.form',['model'=>$craft]);
    }
    public function update(CraftRequest $request,Craft $craft)
    {
        $this->service->update($request,$craft);
        return redirect()->back();
    }
    public function destroy(Craft $craft)
    {
        $this->service->delete($craft);
        return redirect()->back();
    }

}
