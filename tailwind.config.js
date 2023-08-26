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
                'raleway': ['Raleway', 'sans-serif'],
                'open-sans':['Open Sans', 'sans-serif'],
            },
            colors:{
                'muesli': '#978853',
                'coriander': '#BAB390',
                'sisal': '#C9C4A5',
                'sisal-darker': '#a7a181',
                'black-white': '#E3E1D5',
                'caper': '#AABA82',
                'facebook': '#1877F2',
            },
            dropShadow:{
                'caper': '6px 6px 0 rgb(170, 186, 130)',
                'caper-thin': '3px 2px 0 rgb(170, 186, 130)',
                'muesli': '6px 6px 0 rgb(151, 136, 83)',
            },
            keyframes:{
                'fade-in-right': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateX(20px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateX(0)'
                    },
                }
            },
            animation:{
                'fade-in-right': 'fade-in-right 0.5s ease-out'
            }
        }
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

