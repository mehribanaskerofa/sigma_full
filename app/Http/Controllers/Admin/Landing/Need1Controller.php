<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\Need1Request;
use App\Models\Landing\Need1;
use App\Services\RepositoryService\Landing\Need1Service;


class Need1Controller extends Controller
{
    protected $route='landing.need1';
    public function __construct(protected Need1Service $service)
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
    public function store(Need1Request $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Need1 $need1)
    {
        return view('admin.'.$this->route.'.form',['model'=>$need1]);
    }
    public function update(Need1Request $request,Need1 $need1)
    {
        $this->service->update($request,$need1);
        return redirect()->back();
    }
    public function destroy(Need1 $need1)
    {
        $this->service->delete($need1);
        return redirect()->back();
    }

}
