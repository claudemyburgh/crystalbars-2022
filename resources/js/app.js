import "./bootstrap"
import "vanilla-headless"
import SimpleLightboxEsm from "simplelightbox/dist/simple-lightbox.esm"
import "simplelightbox/dist/simple-lightbox.css"
import QuoteForm from "./components/QuoteForm";
import {createRoot}  from 'react-dom/client'


(function ()  {
  new SimpleLightboxEsm(".gallery a", {
    spinner: true,
    fadeSpeed: 200,
    animationSpeed: 100,
    loop: true,
  })
})()


const quoteForm = document.getElementById('form-quote')

if (quoteForm) {
  createRoot(quoteForm).render(<QuoteForm/>)
}




