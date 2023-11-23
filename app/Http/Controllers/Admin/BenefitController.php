<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BenefitRequest;
use App\Models\Benefit;
use App\Models\Company;
use App\Services\RepositoryService\BenefitService;
use App\Services\RepositoryService\BenefitsTypeService;
use App\Services\RepositoryService\CompanyService;
use function Termwind\render;

class BenefitController extends Controller
{

    public function __construct(protected BenefitService $service,protected BenefitsTypeService $typeService)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.benefit.index',['models'=>$models]);
    }
    public function create(CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        $types=$this->typeService->CachedBenefitsType();
        return view('admin.benefit.form',['types'=>$types,'companies'=>$companies]);
    }
    public function store(BenefitRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.benefit.index');
    }
    public function edit(Benefit $benefit,CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        $types=$this->typeService->CachedBenefitsType();
        return view('admin.benefit.form',['model'=>$benefit,'types'=>$types,'companies'=>$companies]);
    }
    public function update(BenefitRequest $benefitRequest,Benefit  $benefit)
    {
        $this->service->update($benefitRequest,$benefit);
        return redirect()->back();
    }
    public function destroy(Benefit $benefit)
    {
        $this->service->delete($benefit);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = Benefit::find($id);

        $model->active = request()->active;
        $model->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
