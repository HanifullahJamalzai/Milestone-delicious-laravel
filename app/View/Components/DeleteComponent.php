<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $action;
    public $routeId;
    public $item;

    public function __construct($action, $routeId, $item)
    {
        $this->action = $action;
        $this->routeId = $routeId;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-component');
    }
}
