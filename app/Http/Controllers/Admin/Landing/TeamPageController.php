<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\TeamPageRequest;
use App\Models\Landing\TeamPage;
use App\Services\RepositoryService\Landing\TeamPageService;


class TeamPageController extends Controller
{
    protected $route='landing.team-page';
    public function __construct(protected TeamPageService $service)
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
    public function store(TeamPageRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(TeamPage $teamPage)
    {
        return view('admin.'.$this->route.'.form',['model'=>$teamPage]);
    }
    public function update(TeamPageRequest $request,TeamPage $teamPage)
    {
        $this->service->update($request,$teamPage);
        return redirect()->back();
    }
    public function destroy(TeamPage $teamPage)
    {
        $this->service->delete($teamPage);
        return redirect()->back();
    }

}
