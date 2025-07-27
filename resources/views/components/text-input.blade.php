@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50
               focus:ring-blue-500 focus:border-sky-400 dark:bg-neutral-800 dark:border-gray-600
               dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-600 dark:focus:border-gray-600']) !!}>
