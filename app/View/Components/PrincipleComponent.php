<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\Sigma\Cases;
use App\Models\Sigma\Principle;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrincipleComponent extends Component
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
        $data = Principle::where('menu_id',$id)->get();
        return view('components.principle-component',compact('slug','data'));
    }
}
