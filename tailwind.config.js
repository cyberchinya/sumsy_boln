/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
  content: [
      './resources/views/**/*.blade.php',

      './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {
        fontmaily: {
            sans: ['Nunito', ...defaultTheme.fontmaily.sans],
        },
        colors: {
            danger: colors.rose,
            primary: colors.blue,
            success: colors.green,
            warning: colors.yellow,
        },
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/typography'),
  ],

}
