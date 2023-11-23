<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Mplan extends Component
{
    /**
     * Create a new component instance.
     */
     private $id;
    public function __construct($id)
    {
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd($id);
        return view('components.mplan'.$this->id);
    }
}
