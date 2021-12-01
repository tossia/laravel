@props(['active' => false])

@php
$classes = 'block text-left px-3 text-sm leading-6 
hover:bg-blue-300 hover:text-white hover:font-weight-bold hover:text-decoration-none focus:text-decoration-none';
if ($active) $classes .= ' bg-info text-white font-weight-bold'
@endphp

<a {{ $attributes(['class' => $classes]) }}
    >{{ $slot }}</a>