<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\Sigma\Head;
use App\Models\Sigma\HeadCounter;
use App\Models\Sigma\HeadSub;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponent extends Component
{

    public function __construct(protected $slug)
    {
    }


    public function render(): View|Closure|string
    {
        $id = Menu::whereTranslation('slug', $this->slug)->first()->id ?? 0;
        $slug=$this->slug;
        $head = Head::where('menu_id',$id)->first();
        $head_sub = HeadSub::where('menu_id',$id)->get();
        $head_counter = HeadCounter::where('menu_id',$id)->first();
        return view('components.header-component',compact('slug','head','head_sub','head_counter'));
    }
}
