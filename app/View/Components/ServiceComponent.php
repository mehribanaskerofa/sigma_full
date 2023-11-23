<?php

namespace App\View\Components;

use App\Models\Sigma\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceComponent extends Component
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
        $services=Service::take(6)->get();
        return view('components.service-component',compact('services'));
    }
}
