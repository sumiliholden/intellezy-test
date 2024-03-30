
@php
    $themeClass = 'text-base leading-6 text-gray-300 hover:cursor-pointer'
@endphp

<a
    {{ $attributes->merge(['class' => $themeClass]) }}>
    {{ $slot }}
</a>
