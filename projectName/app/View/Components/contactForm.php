<?php

namespace App\View\Components;

use Illuminate\View\Component;

class contactForm extends Component
{
    public $email;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($email, $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-form');
    }
}
