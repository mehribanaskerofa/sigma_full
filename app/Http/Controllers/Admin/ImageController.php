<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\ProjectRequest;
use App\Models\Image;
use App\Models\Project;
use App\Services\RepositoryService\CompanyService;
use App\Services\RepositoryService\ImageService;
use App\Services\RepositoryService\ProjectService;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{

    public function __construct(protected ImageService $service)
    {

    }
    public function index()
    {
        $models = $this->service->dataAllWithPaginate();
        return view('admin.image.index',['models'=>$models]);
    }
    public function create(CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        return view('admin.image.form',compact('companies'));
    }
    public function store(ImageRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.image.index');
    }
    public function edit(Image $image,CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        return view('admin.image.form',['model'=>$image,'companies'=>$companies]);
    }
    public function update(ImageRequest $imageRequest, Image $image)
    {
        $this->service->update($imageRequest,$image);
        return redirect()->back();
    }
    public function destroy(Image $image)
    {
        $this->service->delete($image);
        return redirect()->back();
    }
}
