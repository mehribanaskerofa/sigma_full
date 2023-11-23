<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\Sigma\Team;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeamComponent extends Component
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
        $datas = Team::where('menu_id',$id)->orderBy('team')->get()->groupBy('team');
        return view('components.team-component',compact('slug','datas'));
    }
}
