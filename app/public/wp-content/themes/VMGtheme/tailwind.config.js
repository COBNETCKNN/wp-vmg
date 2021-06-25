module.exports = {
  purge: [
    './css/main.css',
    './js/main.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        dmsans: ['DM Sans'],
      },
      colors: {
        header: '#16b4eb',
        footer: '#0D0D0D',
        btnpurple: '#C438EF',

      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
