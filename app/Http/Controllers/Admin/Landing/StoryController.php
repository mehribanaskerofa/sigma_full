<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\StoryRequest;
use App\Models\Landing\Story;
use App\Services\RepositoryService\Landing\StoryService;


class StoryController extends Controller
{
    protected $route='landing.story';
    public function __construct(protected StoryService $service)
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
    public function store(StoryRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Story $story)
    {
        return view('admin.'.$this->route.'.form',['model'=>$story]);
    }
    public function update(StoryRequest $request,Story $story)
    {
        $this->service->update($request,$story);
        return redirect()->back();
    }
    public function destroy(Story $story)
    {
        $this->service->delete($story);
        return redirect()->back();
    }

}
