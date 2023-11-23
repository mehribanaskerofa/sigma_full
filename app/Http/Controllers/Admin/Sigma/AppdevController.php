<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\AppdevRequest;
use App\Models\Sigma\Appdev;
use App\Services\RepositoryService\Sigma\AppdevService;

class AppdevController extends Controller
{
    protected $route='appdev';
    public function __construct(protected AppdevService $service)
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
    public function store(AppdevRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Appdev $appdev)
    {
        return view('admin.'.$this->route.'.form',['model'=>$appdev]);
    }
    public function update(AppdevRequest $request,Appdev $appdev)
    {
        $this->service->update($request,$appdev);
        return redirect()->back();
    }
    public function destroy(Appdev $appdev)
    {
        $this->service->delete($appdev);
        return redirect()->back();
    }

}
