<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\CasesRequest;
use App\Models\Sigma\Cases;
use App\Services\RepositoryService\Sigma\CasesService;

class CasesController extends Controller
{
    protected $route='cases';
    public function __construct(protected CasesService $service)
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
    public function store(CasesRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Cases $cases)
    {
        return view('admin.'.$this->route.'.form',['model'=>$cases]);
    }
    public function update(CasesRequest $request,Cases $cases)
    {
        $this->service->update($request,$cases);
        return redirect()->back();
    }
    public function destroy(Cases $cases)
    {
        $this->service->delete($cases);
        return redirect()->back();
    }

}
