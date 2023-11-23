<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\RareFormat;
use App\Services\RepositoryService\BenefitService;
use App\Services\RepositoryService\BlockService;
use App\Services\RepositoryService\CompanyService;
use App\Services\RepositoryService\FinishingService;
use App\Services\RepositoryService\GalleryService;
use App\Services\RepositoryService\GrandService;
use App\Services\RepositoryService\HouseService;
use App\Services\RepositoryService\InfrastructureService;
use App\Services\RepositoryService\MenuService;
use App\Services\RepositoryService\PageService;
use App\Services\RepositoryService\ProjectService;
use App\Services\RepositoryService\RareFormatService;
use App\Services\RepositoryService\SettingService;
use App\Services\RepositoryService\StaticService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(
//        PageService $pageService,

    ): void
    {
//
        View::share([
//            'about'=>$about,

        ]);
    }
}
