<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\OfferRequest;
use App\Models\Landing\Offer;
use App\Services\RepositoryService\Landing\OfferService;


class OfferController extends Controller
{
    protected $route='landing.offer';
    public function __construct(protected OfferService $service)
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
    public function store(OfferRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function edit(Offer $offer)
    {
        return view('admin.'.$this->route.'.form',['model'=>$offer]);
    }
    public function update(OfferRequest $request,Offer $offer)
    {
        $this->service->update($request,$offer);
        return redirect()->back();
    }
    public function destroy(Offer $offer)
    {
        $this->service->delete($offer);
        return redirect()->back();
    }

}
