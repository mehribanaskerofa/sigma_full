<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Services\FileUploadService;
use App\Services\RepositoryService\SliderService;
use App\Models\Slider;

class SliderController extends Controller
{

    public function __construct(protected SliderService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.slider.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.slider.form');
    }
    public function store(SliderRequest $sliderRequest)
    {
//        dd($sliderRequest->toArray());
        $this->service->store($sliderRequest);
        return redirect()->route('admin.slider.index');
    }
    public function edit(Slider $slider)
    {
        return view('admin.slider.form',['model'=>$slider]);
    }
    public function update(SliderRequest $SliderRequest, Slider $slider)
    {
        $this->service->update($SliderRequest,$slider);
        return redirect()->back();
    }
    public function destroy(Slider $slider)
    {
        $this->service->delete($slider);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = Slider::find($id);

        $model->active = request()->active;
        $model->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
