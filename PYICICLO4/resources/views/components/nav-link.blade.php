@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-b-yellow-400 hover:border-b-yellow-800 text-white text-xl font-bold font-Inter leading-5 focus:outline-none focus:border-yellow-400 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-3 border-b-yellow-400 hover:border-b-yellow-800 text-white text-xl font-bold font-Inter leading-5 focus:outline-none focus:border-yellow-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
