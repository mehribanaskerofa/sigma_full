<?php

use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Front\AllnewsController;
use App\Http\Controllers\Front\CardController;
use App\Models\Menu;
use App\Models\News;
use App\Models\Scroll;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;

Route::get('/', function (){
//    dd(Menu::where('parent_id',21)->chunk(3));
    return view('front.index');
})->name('home');



Route::get('/{slug1}/{slug2?}', function ($slug1,$slug2=null){
    $slug=$slug2 ?? $slug1;

    return view('front.sigma.app',compact('slug'));
})->name('app');

Route::group(['prefix' => 'landing'], function () {
    Route::get('/ar-vr', function () {
        return view('front.landing.ar-vr');
    })->name('landing.ar-vr');

    Route::get('/dedicated-team', function () {
        return view('front.landing.dev');
    })->name('landing.dedicated-team');
});




Route::redirect('/a',app()->getLocale());
Route::prefix('{locale}')
//    ->middleware('lang')
//    ->where(['locale' => implode('|', Config::get('app.languages'))])
    ->group(function() {
        Route::group(['middleware' => 'lang'],function (){
            Route::get('/project/{id}', [CardController::class, 'index'])->name('card-index');
            Route::get('/item-detail/{id}', [CardController::class, 'cardDetail'])->name('detail');


            Route::get('/news/{new:id}', [AllnewsController::class, 'show'])->name('show');

            Route::post('/veri/kaydet', [FormController::class, 'send'])->name('veri.kaydet');

//            Route::get('/', function () {
//                $news = News::All();
//                $head = Menu::All();
//                $sliders = Slider::All();
//                $scroll = Scroll::All();
////    $contact=Contact::All();
//                return view('front.index', compact('news', 'head', 'sliders', 'scroll'));
//            })->name('index');
            Route::get('/home', [\App\Http\Controllers\Front\HomeController::class, 'home'])->name('show.home');

            Route::get('/news', function () {
                return view('front.news-description');
            });


            Route::get('/cardetail', function () {
                return view('front.carddetail2');
            });
            Route::get('/object', function () {
                return view('front.object-card');
            });

            Route::get('/allnews', [AllnewsController::class, 'index'])->name('allnews');
            Route::get('/allnews/news/{new:id}', [AllnewsController::class, 'show'])->name('show');
            Route::get('/allnews/blog/{blog:id}', [AllnewsController::class, 'show2'])->name('show2');
        });
});


Route::get('/lang/{lang}', function (Request $request,$lang) {
    $prevLang=app()->getLocale();
    \Illuminate\Support\Facades\Session::put('lang', $lang);
    app()->setLocale($lang);

    $previousUrl = URL::previous();

    $modifiedUrl = str_replace('/'.$prevLang.'/', '/'.$lang.'/', $previousUrl);

    return redirect($modifiedUrl);

})->name('language-url');



