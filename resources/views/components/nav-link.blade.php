@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-600 text-md font-medium leading-5 text-indigo-600 focus:outline-none focus:border-indigo-600 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-bold leading-5 text-gray-900 hover:text-sky-600 hover:border-sky-500 focus:outline-none focus:text-sky-500 focus:border-sky-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
