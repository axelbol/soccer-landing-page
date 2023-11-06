/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            boxing: ['Boxing', 'sans-serif'],
            striped: ['BoxingStriped', 'sans-serif'],
        }
    },
  },
  plugins: [
    require('tailwindcss-animated'),
  ],
}
