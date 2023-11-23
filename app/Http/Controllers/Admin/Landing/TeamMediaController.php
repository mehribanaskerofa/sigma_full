<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\TeamMediaRequest;
use App\Models\Landing\TeamMedia;
use App\Services\RepositoryService\Landing\TeamMediaService;


class TeamMediaController extends Controller
{
    protected $route='landing.team-media';
    public function __construct(protected TeamMediaService $service)
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
    public function store(TeamMediaRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(TeamMedia $teamMedia)
    {
        return view('admin.'.$this->route.'.form',['model'=>$teamMedia]);
    }
    public function update(TeamMediaRequest $request,TeamMedia $teamMedia)
    {
        $this->service->update($request,$teamMedia);
        return redirect()->back();
    }
    public function destroy(TeamMedia $teamMedia)
    {
        $this->service->delete($teamMedia);
        return redirect()->back();
    }

}
