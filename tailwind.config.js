import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './node_modules/flowbite/**/*.js',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': {
                    100 : '#a2e2ff',
                    200: '#83caf6',
                    300: '#63b2ec',
                    400: '#4499e3',
                    500: '#1F7DD5',
                    600: '#2071be',
                    700: '#1c5d9b',
                    800: '#0c0431',
                    900: '#05001E',
                },
            },
        }
    },

    plugins: [
        forms,
        require('flowbite/plugin'),],
};
