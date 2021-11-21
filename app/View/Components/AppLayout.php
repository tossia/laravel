<?php

use Illuminate\View\Component;
use Illuminate\View\View;

namespace App\View\Components;

class AppLayout extends Component {

    /**
     * Get the view / contents that represents the component.
     *
     * @return View
     */
    public function render() {
        return view('layouts.app');
    }

}
