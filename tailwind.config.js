module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      letterSpacing: {
        ultrawide: '0.25em'
      },
      zIndex: {
        '9': '9'
      },
      lineHeight: {
        '2': '0.5'
      },
      fontFamily: {
        'sans': ['pt_sansregular'],
        'bold': ['pt_sansbold'],
        'cursive': ['Sacramento', 'cursive']
      },
      colors: {
        darkBlue: '#01202C',
        turquoise: '#4DB0B3',
        pomegranate: '#C60011'
      }
    }
  },
  plugins: [],
}
