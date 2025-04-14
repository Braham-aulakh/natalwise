/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        Borderlightgray: '#f0f0f0',
        blue:"#4a91b0",
        borderColor:"#e8e8e8",
        navBg:"#fbf2ed",
      },
    },
  },
  plugins: [],
}
