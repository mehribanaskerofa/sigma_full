<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdvController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\BenefitsTypeController;
use App\Http\Controllers\Admin\BlockController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CompanyImageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ExpertiseController;
use App\Http\Controllers\Admin\HeadController;
use App\Http\Controllers\Admin\HeadCounterController;
use App\Http\Controllers\Admin\HeadIndexController;
use App\Http\Controllers\Admin\HeadSubController;
use App\Http\Controllers\Admin\HouseController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\InfrastructureController;
use App\Http\Controllers\Admin\InfrastructuresTypeController;
use App\Http\Controllers\Admin\Landing\AlbumController;
use App\Http\Controllers\Admin\Landing\GroupController;
use App\Http\Controllers\Admin\Landing\LogoController;
use App\Http\Controllers\Admin\Landing\OfferController;
use App\Http\Controllers\Admin\Landing\SectionController;
use App\Http\Controllers\Admin\Landing\SolutionController;
use App\Http\Controllers\Admin\Landing\TalkController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MonthfilterController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ScrollController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\Sigma\AppdevController;
use App\Http\Controllers\Admin\Sigma\BannerController;
use App\Http\Controllers\Admin\Sigma\CasesController;
use App\Http\Controllers\Admin\Sigma\CraftController;
use App\Http\Controllers\Admin\Sigma\DevController;
use App\Http\Controllers\Admin\Sigma\DriveController;
use App\Http\Controllers\Admin\Sigma\FaqController;
use App\Http\Controllers\Admin\Sigma\GalleryController;
use App\Http\Controllers\Admin\Sigma\PhilosophyController;
use App\Http\Controllers\Admin\Sigma\PrincipleController;
use App\Http\Controllers\Admin\Sigma\RecognitionController;
use App\Http\Controllers\Admin\Sigma\TeamController;
use App\Http\Controllers\Admin\Sigma\TechnologyController;
use App\Http\Controllers\Admin\Sigma\VideoController;
use App\Http\Controllers\Admin\SlideIndexController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StaticController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\Front\ContactFrontController;
use App\Models\Monthfilter;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login',[AdminController::class,'loginView'])->name('admin.login-view');

Route::get('/map',function (\App\Services\RepositoryService\InfrastructureService $service,\App\Services\RepositoryService\InfrastructuresTypeService $typeService){
    $markers=$service->CachedInfrastructures() ?? [];
//    $types=$typeService->CachedInfrastructuresType();
    return view('front.mapmarker',compact('markers'));
});
Route::post('/admin/login',[AdminController::class,'login'])->name('admin.login');


//,'middleware'=>'admin'
Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::get('/m',[AdminController::class,'index'])->name('home');
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');


    Route::resource('menu',MenuController::class)->except(['show']);
    Route::get('menu/status/{id}',[MenuController::class,'status'])->name('status-menu');

    Route::resource('head',HeadController::class)->except(['show']);
    Route::resource('head-sub',HeadSubController::class)->except(['show']);
    Route::resource('head-counter',HeadCounterController::class)->except(['show']);

    Route::resource('video',VideoController::class)->except(['show']);
    Route::resource('technology',TechnologyController::class)->except(['show']);



    Route::resource('head-index',HeadIndexController::class)->except(['show']);
    Route::resource('service',ServiceController::class)->except(['show']);
    Route::resource('slide-index',SlideIndexController::class)->except(['show']);
    Route::resource('expertise',ExpertiseController::class)->except(['show']);


    Route::resource('dev',DevController::class)->except(['show']);
    Route::resource('drive',DriveController::class)->except(['show']);
    Route::resource('banner',BannerController::class)->except(['show']);
    Route::resource('craft',CraftController::class)->except(['show']);
    Route::resource('philosophy',PhilosophyController::class)->except(['show']);
    Route::resource('faq',FaqController::class)->except(['show']);
    Route::resource('appdev',AppdevController::class)->except(['show']);
    Route::resource('cases',CasesController::class)->parameters(['cases' => 'cases'])->except(['show']);


    Route::resource('recognition',RecognitionController::class)->except(['show']);
    Route::resource('principle',PrincipleController::class)->except(['show']);
    Route::resource('team',TeamController::class)->except(['show']);
    Route::resource('gallery',GalleryController::class)->except(['show']);
    Route::resource('blog',BlogController::class)->except(['show']);


    Route::resource('section',SectionController::class)->except(['show']);
    Route::resource('talk',TalkController::class)->except(['show']);
    Route::resource('offer',OfferController::class)->except(['show']);
    Route::resource('album',AlbumController::class)->except(['show']);
    Route::resource('logo',LogoController::class)->except(['show']);
    Route::resource('group',GroupController::class)->except(['show']);
    Route::resource('solution',SolutionController::class)->except(['show']);


    Route::resource('page',PageController::class)->except(['show']);
    Route::get('page/status/{id}',[PageController::class,'status'])->name('status-menu');

    Route::resource('static',StaticController::class)->except(['show']);
    Route::get('static/status/{id}',[StaticController::class,'status'])->name('status-static');

    Route::resource('contact',ContactController::class)->except(['show']);
    Route::get('contact/status/{id}',[ContactController::class,'status'])->name('status-contact');

    Route::resource('setting',SettingController::class)->except(['show']);


    //    Route::get('/status',[Controller::class,'status'])->name('status');
    Route::resource('blog',BlogController::class)->except(['show']);
    Route::get('blog/status/{id}',[BlogController::class,'status'])->name('status-blog');

    Route::resource('news',NewsController::class)->except(['show']);
    Route::get('news/status/{id}',[NewsController::class,'status'])->name('status-news');

    Route::resource('slider',SliderController::class)->except(['show']);
    Route::get('slider/status/{id}',[SliderController::class,'status'])->name('status-slider');


    Route::resource('scroll',ScrollController::class)->except(['show']);
    Route::get('scroll/status/{id}',[ScrollController::class,'status'])->name('status-scroll');


    Route::resource('monthfilter',MonthfilterController::class)->except(['show']);
    Route::get('monthfilter/status/{id}',[MonthfilterController::class,'status'])->name('status-monthfilter');

    Route::resource('benefit',BenefitController::class)->except(['show']);
    Route::get('benefit/status/{id}',[BenefitController::class,'status'])->name('status-benefit');

    Route::resource('benefits-type',BenefitsTypeController::class)->except(['show']);
    Route::get('benefits-type/status/{id}',[BenefitsTypeController::class,'status'])->name('status-benefits-type');


    Route::resource('infrastructure',InfrastructureController::class)->except(['show']);
    Route::get('infrastructure/status/{id}',[InfrastructureController::class,'status'])->name('status-infrastructure');

    Route::resource('infrastructures-type',InfrastructuresTypeController::class)->except(['show']);
    Route::get('infrastructures-type/status/{id}',[InfrastructuresTypeController::class,'status'])->name('status-infrastructures-type');



    Route::resource('static',StaticController::class)->except(['show']);
    Route::get('static/status/{id}',[StaticController::class,'status'])->name('status-static');

    Route::resource('contact',ContactController::class)->except(['show']);
    Route::get('contact/status/{id}',[ContactController::class,'status'])->name('status-contact');

    Route::resource('setting',SettingController::class)->except(['show']);


    //projects-buildings
    Route::resource('company',CompanyController::class)->except(['show']);
    Route::resource('option',OptionController::class)->except(['show']);
    Route::get('option/status/{id}',[OptionController::class,'status'])->name('status-option');

    Route::resource('company-image',CompanyImageController::class)->except(['show']);
    Route::get('company-image/status/{id}',[CompanyImageController::class,'status'])->name('status-company-image');

    Route::resource('adv',AdvController::class)->except(['show']);
    Route::resource('image',ImageController::class)->except(['show']);



    Route::resource('project',ProjectController::class)->except(['show']);
    Route::resource('block',BlockController::class)->except(['show']);


    Route::get('house/{projectId}',[HouseController::class,'index'])->name('house.index');
    Route::get('house/create/{projectId}',[HouseController::class,'create'])->name('house.create');
    Route::get('house/project-blocks/{projectId}',[HouseController::class,'getBlocksByProject'])->name('project-blocks');
//    Route::post('sort-product-image',[HouseController::class,'sort'])->name('product-image-sort');


    Route::resource('house',HouseController::class)->except(['show','create','index']);
    Route::get('house/status/{id}',[HouseController::class,'status'])->name('status-house');



});
Route::get('/clear-cache', [ConfigurationController::class,'clear'])->name('clear-cache');
Route::post('/contact',[ContactFrontController::class,'index'])->name('contact');
