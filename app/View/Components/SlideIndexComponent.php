<?php

namespace App\View\Components;

use App\Models\Sigma\SlideIndex;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlideIndexComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $slides=SlideIndex::all();
        return view('components.slide-index-component',compact('slides'));
    }
}
