/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/views/barber/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        'P': '#0D484F',
        'PHover': '#093136',
        'S': '#F5D57E',
        'Dark': '#0E0E0E',
        'HS': '#ecc760',
        'F': '#086F7B',
      },
      width: {
        'BrCard': '400px',
        'SImg': '250px',
        'LImg': '525px',
        'soc': '40px',
        '200p': '200px',
        '30p': '30px',
      },
      height: {
        'BrCard': '400px',
        'SImg': '250px',
        'LImg': '525px',
        'soc': '40px',
        '200p': '200px',
        '30p': '30px',
      },
      fontFamily: {
        'Def': 'Hammersmith One',
        'Lit': ["Lilita One", "sans-serif"],
      },
      shadowColor: {
        'S': "F5D57E",
      }
    },
    plugins: [],
  }
}


// *{
//   margin: 0;
//   padding: 0;
// }


// /* Fonts */

// .lilita-one {
//   font-family: "Lilita One", sans-serif;
// }