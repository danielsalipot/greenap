/** @type {import('tailwindcss').Config} */
module.exports = {
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
                'hind': ['Hind','sans-serif'],
            },
            colors:{
                'muesli': '#978853',
                'coriander': '#BAB390',
                'sisal': '#C9C4A5',
                'sisal-darker': '#C3BB9B',
                'black-white': '#E3E1D5',
                'caper': '#AABA82',
            },
            dropShadow:{
                'caper': '6px 6px 0 rgb(170, 186, 130)',
                'caper-thin': '3px 2px 0 rgb(170, 186, 130)',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

