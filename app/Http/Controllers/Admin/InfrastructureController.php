<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfrastructureRequest;
use App\Models\Infrastructure;
use App\Services\RepositoryService\CompanyService;
use App\Services\RepositoryService\InfrastructureService;
use App\Services\RepositoryService\InfrastructuresTypeService;

class InfrastructureController extends Controller
{

    public function __construct(protected InfrastructureService $service,
                                protected InfrastructuresTypeService $typeService)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.infrastructure.index',['models'=>$models]);
    }
    public function create(CompanyService $companyService)
    {
        $types=$this->typeService->CachedInfrastructuresType();
        $companies=$companyService->CachedCompany();
        return view('admin.infrastructure.form',['types'=>$types,'companies'=>$companies]);
    }
    public function store(InfrastructureRequest $request)
    {
//        dd($request);
        $this->service->store($request);
        return redirect()->route('admin.infrastructure.index');
    }
    public function edit(Infrastructure $infrastructure,CompanyService $companyService)
    {
        $types=$this->typeService->CachedInfrastructuresType();
        $companies=$companyService->CachedCompany();
        return view('admin.infrastructure.form',['model'=>$infrastructure,'types'=>$types,'companies'=>$companies]);
    }
    public function update(InfrastructureRequest $infrastructureRequest, Infrastructure $infrastructure)
    {
        $this->service->update($infrastructureRequest,$infrastructure);
        return redirect()->back();
    }
    public function destroy(Infrastructure $infrastructure)
    {
        $this->service->delete($infrastructure);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = Infrastructure::find($id);

        $model->active = request()->active;
        $model->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
