const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
      ],

    variants: {
        backgroundColor: [
          'hover',
          'focus',
          'active',
          'odd',
        ],
        display: ['responsive', 'dark'],
        textColor: [
          'focus-within',
          'hover',
          'active',
        ],
        placeholderColor: ['focus'],
        borderColor: ['focus', 'hover'],
        divideColor: ['dark'],
        boxShadow: ['active', 'focus'],
        ringColor: ['focus'],
        lineClamp: ['responsive', 'hover'],
    },

};
