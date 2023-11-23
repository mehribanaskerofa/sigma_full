<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\LogoRequest;
use App\Models\Landing\Logo;
use App\Services\RepositoryService\Landing\LogoService;


class LogoController extends Controller
{
    protected $route='landing.logo';
    public function __construct(protected LogoService $service)
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
    public function store(LogoRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Logo $logo)
    {
        return view('admin.'.$this->route.'.form',['model'=>$logo]);
    }
    public function update(LogoRequest $request,Logo $logo)
    {
        $this->service->update($request,$logo);
        return redirect()->back();
    }
    public function destroy(Logo $logo)
    {
        $this->service->delete($logo);
        return redirect()->back();
    }

}
