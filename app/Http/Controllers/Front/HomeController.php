<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\News;
use App\Models\Scroll;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home(){
        $head=Menu::All();
        $sliders=Slider::All();
        $scroll=Scroll::All();
        $news=News::All();
        return view('front.index',compact('head','sliders','scroll','news'));
    }
}
