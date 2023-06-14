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
        },
        colors:{
            'instagram':'#E4405F',
            'facebook':'#1877F2',
            'whatsapp':'#25D366',
            'github':'#181717',
            'twiter':'#1DA1F2',
        }
    },
  },
  plugins: [ require('@tailwindcss/forms'),],
}

