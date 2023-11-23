<?php

namespace App\View\Components;

use App\Models\Sigma\Expertise;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExpertiseComponent extends Component
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
        $exps=Expertise::take(3)->get();
        return view('components.expertise-component',compact('exps'));
    }
}
