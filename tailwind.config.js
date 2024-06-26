/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      container: {
        center: true, 
        screens: {
          'sm': '100%',
          'md': '100%',
          'lg': '1024px',
          'xl': '1340px',
          '2xl': '1340px',
        },
        padding: {
          DEFAULT: '20px',
        },
      },
      colors: {
        'background': '#1D2127',
        'primary': '#C0EBB9',
        'secondary': '#A6D39F',
        'input': '#2A2F38',
        'input-border': '#353B46',
        'text-primary': '#FFFFFF',
        'text-secondary': '#B5B5B5',
        'container': '#272C34',
        'tertiary': '#E5E5E5',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}