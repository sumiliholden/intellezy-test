@props(['type' => 'button', 'disabled' => false])

@php
    $themeClass = 'text-grey hover:text-ash-grey inline-flex items-center gap-x-2 text-lg'
@endphp

<button
    {{ $attributes->merge(['class' => 'mt-5' . $themeClass]) }}
    type="{{ $type }}">
    {{ $slot }}
</button>
