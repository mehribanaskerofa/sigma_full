<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\DriveRequest;
use App\Models\Sigma\Drive;
use App\Services\RepositoryService\Sigma\DriveService;

class DriveController extends Controller
{
    protected $route='drive';
    public function __construct(protected DriveService $service)
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
    public function store(DriveRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Drive $drive)
    {
        return view('admin.'.$this->route.'.form',['model'=>$drive]);
    }
    public function update(DriveRequest $request,Drive $drive)
    {
        $this->service->update($request,$drive);
        return redirect()->back();
    }
    public function destroy(Drive $drive)
    {
        $this->service->delete($drive);
        return redirect()->back();
    }

}
