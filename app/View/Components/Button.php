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
    public $type;
    public $buttonStyle;

    /**
     * Create a new component instance.
     */
    public function __construct($color = 'blue', $text = 'Button', $href = '#', $type = 'link')
    {
        $this->color = $color;
        $this->text = $text;
        $this->href = $href;
        $this->type = $type;
        $this->buttonStyle = $this->getButtonStyle($color);
    }

    /**
     * Get button styles based on color
     */
    private function getButtonStyle($color)
    {
        $styles = [
            'blue' => 'background-color: #3b82f6; hover-color: #2563eb;',
            'red' => 'background-color: #ef4444; hover-color: #dc2626;',
            'green' => 'background-color: #10b981; hover-color: #059669;',
            'gray' => 'background-color: #6b7280; hover-color: #4b5563;',
        ];

        return $styles[$color] ?? $styles['blue'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
