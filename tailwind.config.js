/** @type {import("tailwindcss").Config} */
module.exports = {
  safelist: [".barba-leave-active", ".barba-enter-active", ".barba-leave", ".barba-enter-to", ".barba-enter", ".barba-leave-to", ".sl-image", ".sl-wrapper"],
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
  theme: {
    fontFamily: {
      sans: ["Poppins", "sans-serif"],
    },
    extend: {
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
      dropShadow: {
        dark: "0 5px 5px rgba(0, 0, 0, 0.5)",
      },
    },
  },
  plugins: [require("tailwindcss-attributes")],
}
