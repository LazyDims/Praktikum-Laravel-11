import withMT from "@material-tailwind/html/utils/withMT";

/** @type {import('tailwindcss').Config} */
export default withMT({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("@tailwindcss/forms")({
            strategy: 'base', // only generate global styles
        }),
    ],
});
