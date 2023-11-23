<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\FaqRequest;
use App\Models\Sigma\Faq;
use App\Services\RepositoryService\Sigma\FaqService;

class FaqController extends Controller
{
    protected $route='faq';
    public function __construct(protected FaqService $service)
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
    public function store(FaqRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Faq $faq)
    {
        return view('admin.'.$this->route.'.form',['model'=>$faq]);
    }
    public function update(FaqRequest $request,Faq $faq)
    {
        $this->service->update($request,$faq);
        return redirect()->back();
    }
    public function destroy(Faq $faq)
    {
        $this->service->delete($faq);
        return redirect()->back();
    }

}
