<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\Sigma\Dev;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DevComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected $slug)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $id = Menu::whereTranslation('slug', $this->slug)->first()->id ?? 0;
        $slug=$this->slug;
        $datas = Dev::where('menu_id',$id)->take(4)->get();

        return view('components.dev-component',compact('slug','datas'));
    }
}
