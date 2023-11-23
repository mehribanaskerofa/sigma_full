<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\TalkRequest;
use App\Models\Landing\Talk;
use App\Services\RepositoryService\Landing\TalkService;


class TalkController extends Controller
{
    protected $route='landing.talk';
    public function __construct(protected TalkService $service)
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
    public function store(TalkRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Talk $talk)
    {
        return view('admin.'.$this->route.'.form',['model'=>$talk]);
    }
    public function update(TalkRequest $request,Talk $talk)
    {
        $this->service->update($request,$talk);
        return redirect()->back();
    }
    public function destroy(Talk $talk)
    {
        $this->service->delete($talk);
        return redirect()->back();
    }

}
