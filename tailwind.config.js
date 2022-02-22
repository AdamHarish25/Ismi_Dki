module.exports = {
  content: [
    '*.html'
  ],
  theme: {
    screens:{
      'xs': '0px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1500px',
      '2xl': '2036px',
    },
    extend: {
      spacing:{
        '700':'1700px',
        '400':'800px',
      }
    },
    fontFamily:{
      'round':['"Varela Round"','sans-serif'],
      'Roundd':['"M PLUS Rounded 1c"','sans-serif'],
      'Roboto':['"Roboto"', 'sans-serif'],
      'Rubik':['"Rubik"', 'sans-serif'],
      'Poppins':['"Poppins"', 'sans-serif'],
    },
  },
}