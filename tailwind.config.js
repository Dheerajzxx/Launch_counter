module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: {
        // 'body-bg':"url('/assets/images/Background.png')",
        'shine': 'linear-gradient(90deg, rgb(33, 215, 228, 0.2) 100%, rgb(255, 255, 255) 100%)',
       },
       colors: {
        'main' : '#0093af',
        'dark': '#353935',
        'light': '#F3F4F6',
        'primary': '#DDBEBE',
        'main-green-light': '#21d7e4',
        'main-green': '#1eb5c0',
        'main-green-dark': '#0a5e64',
        'glass': 'rgba(255, 255, 255, 0.01)'
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ],
}
