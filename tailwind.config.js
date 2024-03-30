
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                green: "#95B541",
                grey: "#525252",
                purple: "#3D3246",
                blue: "#1272EA",
                "ash-grey": "#B5B5B5",
                "slate-grey": "#919191"
            },
            fontFamily: {
                openSans: ['Open Sans', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },

        },
    },
    plugins: [],
}
