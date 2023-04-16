<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CareerCard extends Component
{
    public $department;
    public $position;
    public $area;
    public $description;
    public $url;
    public $vacancy;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($department, $position, $area, $description, $url, $vacancy)
    {
        $this->department  = $department;
        $this->position    = $position;
        $this->area        = $area;
        $this->description = $description;
        $this->url         = $url;
        $this->vacancy     = $vacancy;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.career-card');
    }
}
