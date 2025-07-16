@php
    $colors = [
        'blue' => ['bg' => '#3b82f6', 'hover' => '#2563eb'],
        'red' => ['bg' => '#ef4444', 'hover' => '#dc2626'],
        'green' => ['bg' => '#10b981', 'hover' => '#059669'],
        'gray' => ['bg' => '#6b7280', 'hover' => '#4b5563'],
    ];
    $selectedColor = $colors[$color] ?? $colors['blue'];
    $baseStyle = "display: inline-flex; align-items: center; padding: 0.5rem 1rem; background-color: {$selectedColor['bg']}; color: white; font-weight: 600; border-radius: 0.375rem; text-decoration: none; border: none; cursor: pointer;";
@endphp

@if ($type === 'submit')
    <button type="submit" style="{{ $baseStyle }}"
        onmouseover="this.style.backgroundColor='{{ $selectedColor['hover'] }}'"
        onmouseout="this.style.backgroundColor='{{ $selectedColor['bg'] }}'">
        {{ $text }}
    </button>
@else
    <a href="{{ $href }}" style="{{ $baseStyle }}"
        onmouseover="this.style.backgroundColor='{{ $selectedColor['hover'] }}'"
        onmouseout="this.style.backgroundColor='{{ $selectedColor['bg'] }}'">
        {{ $text }}
    </a>
@endif
