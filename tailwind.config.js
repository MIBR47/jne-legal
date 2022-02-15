module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridRow: {
                "span-21": "span 21 / span 21",
                8: "span 8 / span 8",
            },
            width: {
                15: "15rem",
            },
        },
    },
    plugins: [
        // require('@themesberg/flowbite/plugin'),
    ],
};
