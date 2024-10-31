<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $encabezado;
    public $title;
    public $textboton; 
    
    public function __construct($encabezado, $title, $textboton)
    {
        $this->encabezado=$encabezado;
        $this->title=$title; 
        $this->textboton=$textboton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
