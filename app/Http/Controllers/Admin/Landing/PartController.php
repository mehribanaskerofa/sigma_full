<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\PartRequest;
use App\Models\Landing\Part;
use App\Services\RepositoryService\Landing\PartService;


class PartController extends Controller
{
    protected $route='landing.part';
    public function __construct(protected PartService $service)
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
    public function store(PartRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Part $part)
    {
        return view('admin.'.$this->route.'.form',['model'=>$part]);
    }
    public function update(PartRequest $request,Part $part)
    {
        $this->service->update($request,$part);
        return redirect()->back();
    }
    public function destroy(Part $part)
    {
        $this->service->delete($part);
        return redirect()->back();
    }

}
