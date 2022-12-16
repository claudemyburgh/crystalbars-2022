// import "./bootstrap"
import "vanilla-headless"
import SimpleLightboxEsm from "simplelightbox/dist/simple-lightbox.esm"
import "simplelightbox/dist/simple-lightbox.css"

function init() {
  new SimpleLightboxEsm(".gallery a", {
    spinner: true,
    fadeSpeed: 200,
    animationSpeed: 100,
    loop: true,
  })
}

init()
