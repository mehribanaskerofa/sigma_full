<?php

namespace App\Http\Controllers\Admin\Sigma;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sigma\BlogRequest;
use App\Models\Sigma\Blog;
use App\Services\RepositoryService\Sigma\BlogService;

class BlogController extends Controller
{
    protected $route='blog';
    public function __construct(protected BlogService $service)
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
    public function store(BlogRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Blog $blog)
    {
        return view('admin.'.$this->route.'.form',['model'=>$blog]);
    }
    public function update(BlogRequest $request,Blog $blog)
    {
        $this->service->update($request,$blog);
        return redirect()->back();
    }
    public function destroy(Blog $blog)
    {
        $this->service->delete($blog);
        return redirect()->back();
    }

}
