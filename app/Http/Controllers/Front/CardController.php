<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFrontRequest;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\PageRequest;
use App\Models\Company;
use App\Models\Contact;
use App\Models\House;
use App\Models\Menu;
use App\Models\Monthfilter;
use App\Services\RepositoryService\BenefitService;
use App\Services\RepositoryService\BenefitsTypeService;
use App\Services\RepositoryService\CompanyService;
use App\Services\RepositoryService\ContactService;
use App\Services\RepositoryService\InfrastructuresTypeService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{

    public function __construct(protected ContactService $service)
    {

    }
    public function index($locale,$id, CompanyService $companyService,
    BenefitsTypeService $benefitsTypeService,
    InfrastructuresTypeService $infrastructuresTypeService)
    {

         $monthfilters=Monthfilter::whereCompanyId($id)->orderBy('month_date','desc')->get();

       $monthfilter = [];

foreach ($monthfilters as $item) {
    $month = date('m', strtotime($item['month_date']));
    $quarter = ceil($month / 3); // Çeyrek hesaplama
    $year = date('Y', strtotime($item['month_date']));

    $monthfilter[$year][$quarter][] = $item;
}



            $contacts=Contact::All();
            $head=Menu::All();
        $card=Company::with(['options.translations',
            'projects.translations',
            'benefits.translations',
            'sliders',
            'benefits',
            'benefits.type',
            'benefits.type.translations',
            'infrastructures.type.translations',
            'advs.translations',
            'projects.blocks.houses.translations',
        ])->findOrFail($id);
        // dd($card->benefits->toArray());
        $infras_type = $card->infrastructures->groupBy(function ($item) {
            return $item->type->title;
        })->map(function ($group) {
            $title = $group->first()->type->title;
            $image = $group->first()->type->image;
            $firstItemId = $group->first()->infrastructures_type_id;

            return [
                'title' => $title,
                'image' => $image,
                'id' => $firstItemId,
                'count' => $group->count()
            ];
        });

        $benefits_type = $card->benefits->groupBy(function ($item) {

            return $item->type->title;

        })->map(function ($group) {
            $title = $group->first()->type->title;
            $image = $group->first()->type->image;
            $firstItemId = $group->first()->benefits_type_id;

            return [
                'title' => $title,
                'image' => $image,
                'id' => $firstItemId,
                'count' => $group->count()
            ];
        });

        return view('front.cards',compact('card','contacts','benefits_type','infras_type','head','monthfilter'));
    }
    public function cardDetail($id)
    {
        $cardDetail=House::with(['translations','block'])->where('id',$id)->first();
        return view('front.carddetail2',['card'=>$cardDetail]);
    }
}
