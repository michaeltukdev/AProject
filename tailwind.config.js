/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      background: '#1A1A1A',
      primary: '#9EFF63',
      secondary: '#79D243',
      tertiary: '#65B136',
      'primary-text': '#FFFFFF',
      'secondary-text': '#9EFF63',
      'teriary-text': '#E4E4E6',
    },
    extend: {},
  },
  plugins: [],
}