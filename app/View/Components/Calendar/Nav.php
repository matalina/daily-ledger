<?php

namespace App\View\Components\Calendar;

use Illuminate\View\Component;

class Nav extends Component
{
    public $prev;
    public $next;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($prev, $next, $type)
    {
        $this->prev = $prev;
        $this->next = $next;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.calendar.nav');
    }
}
