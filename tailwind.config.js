const colors = require("tailwindcss/colors")

/** @type {import("tailwindcss").Config} */
module.exports = {
  safelist: [".fslightbox-container", ".fslightbox-toolbar-button", ".fslightbox-svg-path", ".fslightbox-slide-number-container", ".fslightbox-slash"],
  content: ["./resources/**/*.blade.php", "./resources/**/*.{js,jsx}", "./resources/**/*.vue"],
  theme: {
    fontFamily: {
      sans: ["Poppins", "sans-serif"],
    }, extend: {
      colors: {
        primary: {
          DEFAULT: "#1B85B6",
          50: "#99D4F0",
          100: "#87CDED",
          200: "#63BEE8",
          300: "#40AFE3",
          400: "#209FDA",
          500: "#1B85B6",
          600: "#146185",
          700: "#0D3E54",
          800: "#051A23",
          900: "#000000",
        },
      },
      dropShadow: ({theme}) => (
        {

          dark: `0 2px 2px ${theme("colors.primary.700")} `,

        }
      )
    },
  },
  plugins: [require("tailwindcss-attributes")],
}
