<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\RecognitionRequest;
use App\Models\Sigma\Recognition;
use App\Services\RepositoryService\Sigma\RecognitionService;

class RecognitionController extends Controller
{
    protected $route='recognition';
    public function __construct(protected RecognitionService $service)
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
    public function store(RecognitionRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Recognition $recognition)
    {
        return view('admin.'.$this->route.'.form',['model'=>$recognition]);
    }
    public function update(RecognitionRequest $request,Recognition $recognition)
    {
        $this->service->update($request,$recognition);
        return redirect()->back();
    }
    public function destroy(Recognition $recognition)
    {
        $this->service->delete($recognition);
        return redirect()->back();
    }

}
