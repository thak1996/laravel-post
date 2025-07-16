<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $color;
    public $text;
    public $href;

    /**
     * Create a new component instance.
     */
    public function __construct($color = 'blue', $text = 'Button', $href = '#')
    {
        $this->color = $color;
        $this->text = $text;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
