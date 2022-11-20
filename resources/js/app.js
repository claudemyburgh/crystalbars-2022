import "./bootstrap"
import SimpleLightboxEsm from "simplelightbox/dist/simple-lightbox.esm"
import "simplelightbox/dist/simple-lightbox.css"
// import Swup from "swup"
// import SwupScrollPlugin from "@swup/scroll-plugin"
// import SwupA11yPlugin from "@swup/a11y-plugin"

import "vanilla-headless"

import.meta.glob(["../img/**"])
// import "./form-validarion"

// const swap = new Swup({
//   cache: true,
//   animateHistoryBrowsing: true,
//   animationSelector: '[class*="transition-"]',
//   plugins: [new SwupScrollPlugin(), new SwupA11yPlugin()],
// })

function init() {
  new SimpleLightboxEsm(".gallery a", {
    spinner: true,
    fadeSpeed: 200,
    animationSpeed: 100,
    loop: true,
  })
}

init()

// swap.on("contentReplaced", init)
