<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
   public $title;
    public function __construct($title)
    {
        $this->title=$title;
    }

 
    public function render(): View|Closure|string
    {
        $title= $this->title;
        return view('components.navbar', compact('title'));
    }
}
