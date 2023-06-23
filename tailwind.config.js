/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.css",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {

      fontFamily:{
        'nunito': ['Nunito','sans-serif'],
      },
      colors:{
        'muesli': '#978853',
        'coriander': '#BAB390',
        'sisal': '#C9C4A5',
        'sisal-darker': '#C3BB9B',
        'black-white': '#E3E1D5',
      },
      dropShadow:{
        'coriander': '4px 4px 0 rgb(186, 179, 144)',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

