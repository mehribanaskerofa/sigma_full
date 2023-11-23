<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\TeamMenuRequest;
use App\Models\Landing\TeamMenu;
use App\Services\RepositoryService\Landing\TeamMenuService;


class TeamMenuController extends Controller
{
    protected $route='landing.team-menu';
    public function __construct(protected TeamMenuService $service)
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
    public function store(TeamMenuRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(TeamMenu $teamMenu)
    {
        return view('admin.'.$this->route.'.form',['model'=>$teamMenu]);
    }
    public function update(TeamMenuRequest $request,TeamMenu $teamMenu)
    {
        $this->service->update($request,$teamMenu);
        return redirect()->back();
    }
    public function destroy(TeamMenu $teamMenu)
    {
        $this->service->delete($teamMenu);
        return redirect()->back();
    }

}
