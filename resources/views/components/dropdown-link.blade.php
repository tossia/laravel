@props(['active'=> false])

@php 
$classes = 'px-2 block text-left leading-5 
hover:bg-blue-300 hover:text-decoration-none hover:text-white hover:font-weight-bold ';

if ($active) $classes .='bg-info text-white font-weight-bold hover:text-decoration-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
