import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            '2xl': {'max': '1535px'},
            // => @media (max-width: 1535px) { ... }
      
            'xl': {'max': '1279px'},
            // => @media (max-width: 1279px) { ... }
      
            'lg': {'max': '1023px'},
            // => @media (max-width: 1023px) { ... }
      
            'md': {'max': '767px'},
            // => @media (max-width: 767px) { ... }
      
            'sm': {'max': '639px'},
            // => @media (max-width: 639px) { ... }
      
            'xs': {'max': '479px'},
            // => @media (max-width: 479px) { ... }
      
            'xsm': {'max': '379px'},
            // => @media (max-width: 374px) { ... }
          }
    },

    plugins: [forms, typography],
};
