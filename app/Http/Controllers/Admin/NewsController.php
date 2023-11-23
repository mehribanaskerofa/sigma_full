<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Services\RepositoryService\NewsService;
use App\Models\News;

class

NewsController extends Controller
{

    public function __construct(protected NewsService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();

        return view('admin.news.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.news.form');
    }
    public function store(NewsRequest $newsRequest)
    {
        $this->service->store($newsRequest);
        return redirect()->route('admin.news.index');
    }
    public function edit(News $news)
    {
        return view('admin.news.form',['model'=>$news]);
    }
    public function update(NewsRequest $NewsRequest, News $news)
    {
        $this->service->update($NewsRequest,$news);
        return redirect()->back();
    }
    public function destroy(News $news)
    {
        $this->service->delete($news);
        return redirect()->back();
    }
    public function status($id)
    {
        $model = News::find($id);

        $model->active = request()->active;
        $model->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
