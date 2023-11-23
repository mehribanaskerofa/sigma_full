<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MonthfilterRequest;
use App\Models\Monthfilter;
use App\Services\RepositoryService\MonthfilterService;

class MonthfilterController extends Controller
{

    public function __construct(protected MonthfilterService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.monthfilter.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.monthfilter.form');
    }
    public function store(MonthfilterRequest $monthfilterRequest)
    {
        $this->service->store($monthfilterRequest);
        return redirect()->route('admin.monthfilter.index');
    }
    public function edit(Monthfilter $monthfilter)
    {
        return view('admin.monthfilter.form',['model'=>$monthfilter]);
    }
    public function update(MonthfilterRequest $MonthfilterRequest, Monthfilter $monthfilter)
    {
        $this->service->update($MonthfilterRequest,$monthfilter);
        return redirect()->back();
    }
    public function destroy(Monthfilter $monthfilter)
    {
        $this->service->delete($monthfilter);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = Monthfilter::find($id);

        $model->active = request()->active;
        $model->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
