<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfrastructuresTypeRequest;
use App\Models\InfraType;
use App\Services\RepositoryService\InfrastructuresTypeService;

class InfrastructuresTypeController extends Controller
{

    public function __construct(protected InfrastructuresTypeService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.infrastructures-type.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.infrastructures-type.form');
    }
    public function store(InfrastructuresTypeRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.infrastructures-type.index');
    }
    public function edit(InfraType $infrastructuresType)
    {
        return view('admin.infrastructures-type.form',['model'=>$infrastructuresType]);
    }
    public function update(InfrastructuresTypeRequest $infrastructuresTypeRequest, InfraType $infrastructuresType)
    {
        $this->service->update($infrastructuresTypeRequest,$infrastructuresType);
        return redirect()->back();
    }
    public function destroy(InfraType $infrastructuresType)
    {
        $this->service->delete($infrastructuresType);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = InfraType::find($id);

        $model->active = request()->active;
        $model->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
