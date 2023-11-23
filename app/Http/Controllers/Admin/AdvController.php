<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvRequest;
use App\Models\Adv;
use App\Services\RepositoryService\AdvService;
use App\Services\RepositoryService\CompanyService;
class AdvController extends Controller
{

    public function __construct(protected AdvService $service)
    {

    }
    public function index()
    {
        $models = $this->service->dataAllWithPaginate();
        return view('admin.adv.index',['models'=>$models]);
    }
    public function create(CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        return view('admin.adv.form',compact('companies'));
    }
    public function store(AdvRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.adv.index');
    }
    public function edit(Adv $adv,CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        return view('admin.adv.form',['model'=>$adv,'companies'=>$companies]);
    }
    public function update(AdvRequest $advRequest, Adv $adv)
    {
        $this->service->update($advRequest,$adv);
        return redirect()->back();
    }
    public function destroy(Adv $adv)
    {
        $this->service->delete($adv);
        return redirect()->back();
    }
}
