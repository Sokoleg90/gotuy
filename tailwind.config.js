/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
  theme: {
      fontFamily:
          {
              'pacifico': ['"Pacifico"'],
              'alice': ['"Alice"'],
          },
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}

