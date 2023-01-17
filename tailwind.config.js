/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      
    },
    backgroundImage: {
      'img': "url('img/logo/headerbg.png')"
    }
  },
  plugins: [
    require('flowbite/plugin'),
  ],
  
}
