@props(['navName' => '', 'active' => true])

@php
    $classes = $active ? 'text-purple-700' : 'text-gray-700 lg:bg-transparent';
@endphp

<li>
    <a href="#"
        class="block py-2 pl-3 pr-4 rounded hover:text-purple-700 lg:p-0 dark:text-white {{ $classes }}"
        aria-current="page">{{ $navName }}</a>
</li>
