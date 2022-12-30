const _ = require("lodash");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        fontFamily: {
            sofia: ['SofiaPro'],
            icomoon : ['icomoon'],
        },
        extend: {
            screens: {
                'xlm': {'min': '1800px'},
				// => @media (min-width: 1800px) { ... }
                'lm': {'max': '1799px'},
				// => @media (max-width: 1799px) { ... }
                'md': {'max': '1024px'},
				// => @media (max-width: 1024px) { ... }
                'sm': {'max': '768px'},
				// => @media (max-width: 768px) { ... }
                'xsm': {'max': '549px'},
                // => @media (max-width: 549px) { ... }
			},
            colors: {
                greyblack: "#000000",
                greysusuperdark: "#1d1d1d",
                greysuperdark: "#3e3e3e",
                greydark: "#444444",
                greymedium: "#898989",
                greylight: "#bababa",
                greysuperlight: "#f3f3f3",
                greysusuperlight: "#fafafa",
                greywhite: "#ffffff",
                orangedark: "#fe2e00",
                orangebold: "#fe5000",
                orangemedium: "#ff564a",
                orangesuperlight: "#fff8f4",
                bluesuperdark: "#001726",
                bluedark: "#041c2c",
                bluenavy: "#002853",
                bluenavylight: "#003e68",
                bluemedium: "#052c46",
                bluelight: "#304659",
                bluelilight: "#3b5266",
                bluesuperlight: "#8298ab",
                bluesusuperlight: "#c2d5e5",
                blueextralight: "#e1e9f0",
                blueexextralight: "#f5f9fc",
                redbold: "#ed330a",
            },
        },
    },
    plugins: [
        tailpress.tailwind
    ]
};
