module.exports = {
  important: true,
  content: [
    '*.html'
  ],
  variants: {
    extend: {
      visibility: ["group-hover"],
      visibility: ["group-active"],
      width: ['hover'],
      animation: ['group-hover'],
    },
   },
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
      keyframes: {
        visibleDelay: {
          '0%' : { visibility: 'hidden', opacity: '0'},
          '25%' : { visibility: 'hidden', opacity: '0'},
          '100%' : { visibility: 'visible', opacity: '100%'},
        }
      },
      animation: {
        visibleDelay: 'visibleDelay 1s ease forwards',
      },
      spacing:{
        '700':'1400px',
        '400':'800px',
        '100':'500px',
        '2000':'2000px',
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