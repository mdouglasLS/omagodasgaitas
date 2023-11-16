@props(['active', 'class' => ''])

@php
    $classes = ($active ?? false)
                ? 'md:border-blue-500 md:dark:border-indigo-600
                text-gray-900 dark:text-gray-100 focus:md:outline-none focus:md:border-indigo-700 bg-gray-200 md:bg-transparent dark:bg-neutral-800 dark:md:bg-transparent'
                : 'md:border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300
                hover:border-gray-300 dark:hover:border-gray-700 focus:md:outline-none focus:md:text-gray-700
                dark:md:focus:text-gray-300 md:focus:border-gray-300 dark:md:focus:border-gray-700';
@endphp

<a class="inline-flex items-center w-full p-2 md:p-0 rounded-md md:rounded-none
md:px-1 md:pt-1 md:border-b-2 font-bold leading-5 transition duration-150 ease-in-out {{$classes}} {{ $class }}"
    {{ $attributes }}>
    {{ $slot }}
</a>
