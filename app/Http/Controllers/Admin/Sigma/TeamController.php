<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\TeamRequest;
use App\Models\Sigma\Team;
use App\Services\RepositoryService\Sigma\TeamService;

class TeamController extends Controller
{
    protected $route='team';
    public function __construct(protected TeamService $service)
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
    public function store(TeamRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Team $team)
    {
        return view('admin.'.$this->route.'.form',['model'=>$team]);
    }
    public function update(TeamRequest $request,Team $team)
    {
        $this->service->update($request,$team);
        return redirect()->back();
    }
    public function destroy(Team $team)
    {
        $this->service->delete($team);
        return redirect()->back();
    }

}
