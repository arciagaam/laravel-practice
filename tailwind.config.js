module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation : {
        'toast': 'toast 3s ease-in-out'
      },
      keyframes : {
        toast : {
          '0%' : {transform: 'translateY(0)'},
          '25%': {transform: 'translateY(calc(100% + 50px))'},
          '75%' : {transform: 'translateY(calc(100% + 50px))'},
          '100%' : {transform: 'translateY(0)'},
          
        }
      }
    },
  },
  plugins: [],
}