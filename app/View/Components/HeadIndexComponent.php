<?php

namespace App\View\Components;

use App\Models\Sigma\HeadIndex;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeadIndexComponent extends Component
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
        $data=HeadIndex::first();
        return view('components.head-index-component',compact('data'));
    }
}
