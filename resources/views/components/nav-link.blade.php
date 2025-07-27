@props(['active', 'class' => ''])

@php
    $classes = ($active ?? false)
                ? 'text-gray-900 dark:text-gray-100 focus:lg:outline-none bg-gray-200 lg:bg-transparent dark:bg-neutral-800 dark:lg:bg-transparent'
                : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300
                focus:lg:outline-none focus:lg:text-gray-700
                dark:lg:focus:text-gray-300';
@endphp

<a class="inline-flex items-center w-full p-2 lg:p-0 rounded-md lg:rounded-none
lg:px-1 lg:pt-1 font-bold leading-5 transition duration-150 ease-in-out {{$classes}} {{ $class }}"
    {{ $attributes }}>
    {{ $slot }}
</a>
