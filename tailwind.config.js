import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}",
        './vendor/filament/**/*.blade.php',
        './vendor/danharrin/filament-blog/resources/views/**/*.blade.php', // Your plugin's vendor directory
        './vendor/danharrin/filament-blog_one/resources/views/**/*.blade.php'// Your plugin's vendor directory


    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                serif: ['Poppins', 'serif'],
            },
            
            colors: {
                'green': '#97FB57',
                'gray': '#909090 ',
                'black': '#121212',
            },

        },

        plugins: [forms],

    },
}

