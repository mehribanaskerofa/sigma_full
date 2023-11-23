<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\Sigma\Faq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqComponent extends Component
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
        $datas = Faq::where('menu_id',$id)->get();

        return view('components.faq-component',compact('slug','datas'));
    }
}
