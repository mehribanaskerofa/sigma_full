<?php

namespace App\View\Components;

use App\Models\Company;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComponentItems extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected $id)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $companies=Company::where('id', '<>', $this->id)->get();
        return view('components.component-items',compact('companies'));
    }
}
