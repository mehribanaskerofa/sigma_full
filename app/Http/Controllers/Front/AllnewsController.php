<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Menu;
use App\Models\News;
use App\Models\Scroll;
use App\Models\Slider;

class AllnewsController extends Controller
{
    public function index()
    {
        $head=Menu::All();
        $news=News::All();
        $blogs=Blog::All();
        return view('front.allnews', compact('head','news','blogs'));
    }
    public function show(News $new)
    {
        $head=Menu::All();
        $news = News::where('id','!=',$new->id)->get();
        return view('front.news-description', compact('new', 'head','news'));
    }

    public function show2(Blog $blog)
    {
        $head=Menu::All();
        return view('front.blog-description', compact('blog', 'head'));
    }
}
