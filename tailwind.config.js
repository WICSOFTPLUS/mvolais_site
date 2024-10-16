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
            'primary': '#095f9a',
            'secondary': '#7d7d7d',
            'tertiary': "#000"
    },
    extend: {},
  },
  plugins: [],
}

