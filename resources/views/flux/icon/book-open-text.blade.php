@props([
    'variant' => 'outline', // Các biến thể: outline, mini, micro
])

@php
    if ($variant === 'solid') {
        throw new \Exception('The "solid" variant is not supported in Lucide.');
    }

    $classes = Flux::classes('shrink-0')->add(
        match ($variant) {
            'outline' => '[:where(&)]:size-6',
            'mini' => '[:where(&)]:size-5',
            'micro' => '[:where(&)]:size-4',
            default => '[:where(&)]:size-6',
        },
    );

    $strokeWidth = match ($variant) {
        'outline' => 2,
        'mini' => 2.25,
        'micro' => 2.5,
        default => 2,
    };
@endphp

<svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round"
    aria-hidden="true" data-slot="icon" data-flux-icon>
    <path d="M12 7v14" />
    <path d="M16 12h2" />
    <path d="M16 8h2" />
    <path
        d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
    <path d="M6 12h2" />
    <path d="M6 8h2" />
</svg>