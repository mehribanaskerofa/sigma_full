<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\Need2Request;
use App\Models\Landing\Need2;
use App\Services\RepositoryService\Landing\Need2Service;


class Need2Controller extends Controller
{
    protected $route='landing.need2';
    public function __construct(protected Need2Service $service)
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
    public function store(Need2Request $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Need2 $need2)
    {
        return view('admin.'.$this->route.'.form',['model'=>$need2]);
    }
    public function update(Need2Request $request,Need2 $need2)
    {
        $this->service->update($request,$need2);
        return redirect()->back();
    }
    public function destroy(Need2 $need2)
    {
        $this->service->delete($need2);
        return redirect()->back();
    }

}
