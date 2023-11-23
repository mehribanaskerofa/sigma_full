<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\GroupRequest;
use App\Models\Landing\Group;
use App\Services\RepositoryService\Landing\GroupService;


class GroupController extends Controller
{
    protected $route='landing.group';
    public function __construct(protected GroupService $service)
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
    public function store(GroupRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Group $group)
    {
        return view('admin.'.$this->route.'.form',['model'=>$group]);
    }
    public function update(GroupRequest $request,Group $group)
    {
        $this->service->update($request,$group);
        return redirect()->back();
    }
    public function destroy(Group $group)
    {
        $this->service->delete($group);
        return redirect()->back();
    }

}
