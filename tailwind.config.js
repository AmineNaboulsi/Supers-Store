/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,js}"],
  theme: {
    fontFamily: {
      Inter: ["Inter", "ui-sans-serif", "system-ui"],
    },
    extend: {
      colors:{
      'white': '#FFFFFF',
      '50': '#F2F5FB',
      '100': '#E7ECF8',
      '200': '#D3DBF2',
      '300': '#B8C3E9',
      '400': '#9BA5DE',
      '500': '#8188D3',
      '600': '#5957AB',
      '700': '#5957AB',
      '800': '#49498A',
      '900': '#40416F',
      '950': '#22223B',
      },
      animation:{
        shoeanimation:'shoe 1.5s ease infinite',
        searchbaranimation: 'searchbar 1s ease-in-out ',
      },

      keyframes:{
        'shoe':{
          '0%':{
            transform: 'translateY(10px)',
          },
          '50%':{
            transform: 'translateY(-10px)',
          },
          '100%':{
            transform: 'translateY(10px)',
          },
        },
       'searchbar':{
        '0%':{
            width: '200px',
          },
          '100%':{
            width: '400px',
          },
       },
      }
    },
  },
  plugins: [],
}