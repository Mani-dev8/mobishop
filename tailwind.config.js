


/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        mont: "'Montserrat', sans-serif",
        pop: "'Poppins', sans-serif",
        rubic: "'Rubik', sans-serif",
        vt323: "'VT323', monospace;"

      },
      boxShadow: {
        'red': '0 2px 3px -1px rgba(225 29 72/0.8)',
      }
    },
    screens: {
      'xs': '400px',
      // => @media (min-width: 640px) { ... }

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    }
  },
  fontSize: {
    xxs: ['14px', '20px'],
    sm: '0.8rem',
    base: '1rem',
    xl: '1.25rem',
  },
  plugins: [],
}
