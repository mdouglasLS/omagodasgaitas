@props(['active', 'class' => ''])

@php
    $classes = ($active ?? false)
                ? 'lg:border-primary-500 lg:dark:border-primary-500
                text-gray-900 dark:text-gray-100 focus:lg:outline-none focus:lg:border-primary-700 bg-gray-200 lg:bg-transparent dark:bg-neutral-800 dark:lg:bg-transparent'
                : 'lg:border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300
                hover:border-gray-300 dark:hover:border-gray-700 focus:lg:outline-none focus:lg:text-gray-700
                dark:lg:focus:text-gray-300 lg:focus:border-gray-300 dark:lg:focus:border-gray-700';
@endphp

<a class="inline-flex items-center w-full p-2 lg:p-0 rounded-md lg:rounded-none
lg:px-1 lg:pt-1 lg:border-b-2 font-bold leading-5 transition duration-150 ease-in-out {{$classes}} {{ $class }}"
    {{ $attributes }}>
    {{ $slot }}
</a>
