<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Advert extends Component
{
    public $advert;
    public function __construct($advert)
    {
        $this->advert = $advert;
    }

    public function render()
    {
        return view('components.advert');
    }
}
