<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white">
  <div class="wrapper py-12 md:flex md:items-center md:justify-between">
    <div class="flex justify-center space-x-6 md:order-2">
      <a href="https://www.facebook.com/www.crystalbars.co.za" target="_blank" class="text-gray-400 text-2xl flex items-center hover:text-[#4267B2]">
   <svg aria-hidden="true" fill="currentColor" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
        </svg>
        <span class="pl-1 font-heading">Facebook</span>
      </a>



    </div>
    <div class="mt-8 md:mt-0 md:order-1">
      <p class="text-center text-base text-gray-400">&copy; {{now()->year}} {{ config('app.name') }}, Inc. All rights reserved.</p>
    </div>
  </div>
</footer>
<footer class="py-6 bg-gray-100 border-t border-gray-300 ">
  <div class="wrapper">
    <p class="text-center font-light text-primary">Design and Developed by <a href="https://designbycode.co.za/" target="_blank">DesignByCode</a></p>
      <p class="text-center text-sm text-gray-500 py-4">
          Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
      </p>
  </div>
</footer>
