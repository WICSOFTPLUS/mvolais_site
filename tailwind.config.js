/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

export default {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
    theme: {
        colors: {
          ...colors,
            'primary': '#04639b',
            'primary2': '#04639b',
            'secondary': '#7d7d7d',
            'tertiary': "#000"
    },
        extend: {},
    backgroundColor: (theme) => ({
      ...theme('colors'),
    }),
    borderColor: (theme) => ({
      ...theme('colors'),
    }),
  },
  plugins: [],
}

