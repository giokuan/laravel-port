/** @type {import('tailwindcss').Config} */
export default {
    
    content: [
        // You will probably also need these lines
        "./resources/**/**/*.blade.php",
        "./resources/**/**/*.js",
        "./app/View/Components/**/**/*.php",
        "./app/Livewire/**/**/*.php",

        // Add mary
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
    ],
    theme: {
        extend: {
            animation: {
                wiggle: 'wiggle 1s ease-in-out infinite',
              }
        },
    },

    // Add daisyUI
    plugins: [require("daisyui"), ('@tailwindcss/animation'),]

    
}

