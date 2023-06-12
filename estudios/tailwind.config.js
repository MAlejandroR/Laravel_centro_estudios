/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
        height: {
            '10vh': '10vh',
            '15vh': '15vh',
            '65vh': '65vh',
            '60vh': '60vh',
            '40vh': '40vh',
            '50vh': '50vh',
        }
    },
  },
  plugins: [],
}

