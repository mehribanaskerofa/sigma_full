<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\Sigma\Appdev;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppdevComponent extends Component
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
        $datas = Appdev::where('menu_id',$id)->take(2)->get();

        return view('components.appdev-component',compact('slug','datas'));
    }
}
