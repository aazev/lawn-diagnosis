/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./storage/framework/views/*.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.{js,ts,jsx,tsx,vue}",
    ],
    theme: {
        extend: {
            gridTemplateAreas: {
                admin: ["header", "content", "footer"],
            },
            gridTemplateRows: {
                admin: "auto 1fr auto",
                internal: "repeat(auto-fill, minmax(100px, 1fr))",
            },
            gridTemplateColumns: {
                admin: "1fr",
                internal:
                    "repeat(auto-fill, minmax(calc((100vw / 12) - 1rem), 1fr))",
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
        require("@savvywombat/tailwindcss-grid-areas"),
    ],
};
