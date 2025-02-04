import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./src/**/*.{html,js}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                jaune: "#ffd42a",
            },


            width: {
                '7/10': '72%',
              },

            scale: {
                '220': '2.20',
                '250': '2.50',
              },

              
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
