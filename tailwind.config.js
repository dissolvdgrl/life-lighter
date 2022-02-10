module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      letterSpacing: {
        ultrawide: '0.35em'
      },
      fontFamily: {
        'sans': ['pt_sansregular'],
        'bold': ['pt_sansbold']
      },
      colors: {
        darkBlue: '#01202C',
        turquoise: '#4DB0B3',
        pomegranate: '#C60011'
      }
    },
    zIndex: {
      '9': '9'
    },
  },
  plugins: [],
}
