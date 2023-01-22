const mix = require("laravel-mix")


mix.js("resources/js/app.js", "public/js")
  // .postCss("resources/css/app.scss", "public/css", [require("postcss-import"), require("tailwindcss")])
  .sass("resources/css/app.scss", "public/css")
  .disableSuccessNotifications()
  .react()

if (mix.inProduction()) {
  mix.version()
}
