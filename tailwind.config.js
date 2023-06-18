/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px"
    },
    extend: {
      colors: {
        primary: "#FF0051",
        dark: "#1D3746",
        background: "#f8f9fa",
        border: "#e5e7eb",
        darkborder: "#c5c5c5",
        green: "#00eb71",
        yellow: "#ffbf00",
      },
      fontSize: {
        label: "16px",
        logo: "64px",
        h1: "48px",
        h2: "32px",
        h3: "24px",
        larger: "18px",
        small: "14px",
      },
      boxShadow: {
        main: '0px 8px 32px -8px rgba(0, 0, 0, 0.08)',
      },
      transitionTimingFunction: {
        'bezier': 'cubic-bezier(0.75, -0.5, 0, 1.5)',
      }
    },
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '422px',
          },
          '@screen md': {
            maxWidth: '540px',
          },
          '@screen lg': {
            maxWidth: '806px',
          },
          '@screen xl': {
            maxWidth: '806px',
          },
        }
      })
    },
  ],
}

