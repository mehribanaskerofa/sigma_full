<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\SectionRequest;
use App\Models\Landing\Section;
use App\Services\RepositoryService\Landing\SectionService;


class SectionController extends Controller
{
    protected $route='landing.section';
    public function __construct(protected SectionService $service)
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
    public function store(SectionRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Section $section)
    {
        return view('admin.'.$this->route.'.form',['model'=>$section]);
    }
    public function update(SectionRequest $request,Section $section)
    {
        $this->service->update($request,$section);
        return redirect()->back();
    }
    public function destroy(Section $section)
    {
        $this->service->delete($section);
        return redirect()->back();
    }

}
