<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\RepositoryService\BlogService;

class BlogController extends Controller
{

    public function __construct(protected BlogService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.blog.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.blog.form');
    }
    public function store(BlogRequest $blogRequest)
    {
        $this->service->store($blogRequest);
        return redirect()->route('admin.blog.index');
    }
    public function edit(Blog $blog)
    {
        return view('admin.blog.form',['model'=>$blog]);
    }
    public function update(BlogRequest $BlogRequest, Blog $blog)
    {
        $this->service->update($BlogRequest,$blog);
        return redirect()->back();
    }
    public function destroy(Blog $blog)
    {
        $this->service->delete($blog);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = Blog::find($id);

        $model->active = request()->active;
        $model->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
