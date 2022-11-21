// import "./bootstrap"
import "vanilla-headless"
import SimpleLightboxEsm from "simplelightbox/dist/simple-lightbox.esm"
import "simplelightbox/dist/simple-lightbox.css"
import barba from "@barba/core"
// import { gsap } from "gsap";
// import barbaCss from '@barba/css';
// import barbaRouter from "@barba/router"
//
// const myRoutes = [
//   {
//     path: "/",
//     name: "home",
//   },
//   {
//     path: "/faq",
//     name: "faq",
//   },
//   {
//     path: "/products",
//     name: "products",
//   },
//   {
//     path: "/gallery",
//     name: "gallery",
//   },
//   {
//     path: "/quote",
//     name: "quote",
//   },
// ]
//
// barba.use(barbaRouter, {
//   routes: myRoutes
// });

// barba.init({
    // transitions: [{
    //   name: 'opacity-transition',
    //   leave(data) {
    //     return gsap.to(data.current.container, {
    //       opacity: 0,
    //       duration: 0.15
    //     });
    //   },
    //   enter(data) {
    //     return gsap.from(data.next.container, {
    //       opacity: 0,
    //       duration: 0.15
    //     });
    //   }
    // }]
// });

function init() {
  new SimpleLightboxEsm(".gallery a", {
    spinner: true,
    fadeSpeed: 200,
    animationSpeed: 100,
    loop: true,
  })
}

init()
