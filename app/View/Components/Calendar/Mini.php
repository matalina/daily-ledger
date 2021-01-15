<?php

namespace App\View\Components\Calendar;

use Illuminate\View\Component;

class Mini extends Component
{
    public $date;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.calendar.mini');
    }
}
