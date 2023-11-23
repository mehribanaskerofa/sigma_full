<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyImageRequest;
use App\Models\CompanyImage;
use App\Services\RepositoryService\CompanyImageService;
use App\Services\RepositoryService\CompanyService;

class CompanyImageController extends Controller
{

    public function __construct(protected CompanyImageService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.company-image.index',['models'=>$models]);
    }
    public function create(CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        return view('admin.company-image.form',['companies'=>$companies]);
    }
    public function store(CompanyImageRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.company-image.index');
    }
    public function edit(CompanyImage $companyImage,CompanyService $companyService)
    {
        $companies=$companyService->CachedCompany();
        return view('admin.company-image.form',['model'=>$companyImage,'companies'=>$companies]);
    }
    public function update(CompanyImageRequest $companyImageRequest, CompanyImage $companyImage)
    {
        $this->service->update($companyImageRequest,$companyImage);
        return redirect()->back();
    }
    public function destroy(CompanyImage $companyImage)
    {
        $this->service->delete($companyImage);
        return redirect()->back();
    }

}
