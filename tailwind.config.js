const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './*/*.php',
            './**/*.php',
            './resources/css/*.css',
            './resources/js/*.js',
            './safelist.txt'
        ],
    },
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: {
                'base': '1.065rem',
            },
            lineHeight: {
                '7': '2.2rem',
            },
            borderRadius: {
                '3xl': '4rem',
            },
            backgroundSize: {
                's10': '10px',
            }
        },
        fontFamily: {
            sans: ["Ubuntu Mono", "monospace"],
            source: ["Source Sans Pro", "sans-serif"],
            zrnic: ["zrnic_rg", "sans-serif"] 
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': tailpress.theme('settings.layout.wideSize', theme)
        },
    },
    plugins: [
        tailpress.tailwind
    ]
};
