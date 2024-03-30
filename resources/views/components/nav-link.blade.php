
@php
    $themeClass = 'text-xs font-semibold tracking-[.2em] text-white hover:cursor-pointer'
@endphp

<a
    {{ $attributes->merge(['class' => $themeClass]) }}>
    {{ $slot }}
</a>
