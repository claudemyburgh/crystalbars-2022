;(function () {
  "use strict"

  const form = document.getElementById("form")
  if (!form) return

  async function submitForm(event) {
    event.preventDefault()
    const btn = form.querySelector("button")
    const formData = new FormData(form)
    const values = [...formData.entries()]
    console.log(values)
    const response = await window.axios.post("quote-send", values)
    btn.disabled = true
  }

  form.addEventListener("submit", submitForm)
})()
