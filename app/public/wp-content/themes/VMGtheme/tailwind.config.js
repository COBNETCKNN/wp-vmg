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
        servicetitle: '#3B3E43',
        servicecontent: '#595E64',
        brandcontent: '#00A077',
        bottomclient: '#424A4D',
        redbutton: '#AE0404',
        industriestitle: '#F82A2D',
        yellowbtn: '#F9A724',
        yellowfont: '#FFDB5B',
        menuitems: '#3B3E43',
        

      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
