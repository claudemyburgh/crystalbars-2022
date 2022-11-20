<x-layout-app>
  @section('title', 'Transparent burglar bars in Cape Town')

  @include('partials._hero')

  <section class="wrapper my-24 flex items-center flex-wrap md:flex-row-reverse">
    <figure
      class="overflow-hidden rounded-md shadow-2xl shadow-primary/50 mb-6 h-60 md:h-auto relative z-20 w-full md:w-1/3 ">
      <img class="w-full max-w-full" height="732" width="540" loading="lazy"
           src="{{ Vite::asset('resources/img/stand.jpg') }}" alt="{{config('app.name')}} stand at homemakers expo">
    </figure>

    <article class="w-full md:w-2/3 p-4 md:p-6 lg:p-8 rounded-md bg-white shadow space-y-4">
      <header>
        <h2 class="heading-2">
          See-through burglar bars
        </h2>
      </header>
      <p class="text-lg">
        For our clear burglar bars, we use A-grade polycarbonate that is imported from Europe. The transparent burglar
        bar is 6 mm thick and 35 mm wide. The bars are beveled on both sides so that there are no sharp edges that could
        cut you when opening the windows. They are UV protected to prevent them from discolouring in the direct sun.
      </p>
      <p class="text-lg">
        The burglar bars are transparent so you will have an unobstructed view and have the most stylish clear burglar
        bars that will never rust and will never require any maintenance. Unfortunately, with all security systems, none
        of them are 100% intruder proof. Burglar bars are only a deterrent and should keep out your intruder until your
        security company or police arrive at your house.
      </p>
      <p class="text-lg">We serve Cape Town area and surroundings.</p>
    </article>


  </section>

  <section class="wrapper my-24 grid grid-cols-3 gap-4 md:gap-6 lg:gap-8">
    <div class="p-4 md:p-6 lg:p-8 rounded-md bg-white shadow space-y-4 col-span-3 md:col-span-1">
      <header>
        <h3 class="text-4xl font-black tracking-tight font-heading">
          Secure &amp; Strong
        </h3>
      </header>
      <p class="text-xl leading-8">
        The transparent bars material is virtually unbreakable and withstands a tremendous amount of force. They are
        flexible and have a tensile breaking strength of 3000 kg.
      </p>
    </div>
    <div class="p-4 md:p-6 lg:p-8 rounded-md bg-white shadow space-y-4 col-span-3 md:col-span-1">
      <header>
        <h3 class="text-4xl font-black tracking-tight font-heading">
          Zero Maintenance
        </h3>
      </header>
      <p class="text-xl leading-8">
        They are UV protected to prevent them from discolouring in the direct sun. You will have clear burglar bars that
        will never rust and will never require any maintenance.
      </p>
    </div>
    <div
      class="p-4 md:p-6 lg:p-8 rounded-md bg-white shadow space-y-4 bg-primary-500 text-white col-span-3 md:col-span-1">
      <header>
        <h3 class="text-4xl font-black tracking-tight font-heading">
          Photos Gallery
        </h3>
      </header>
      <p class="text-xl leading-8">
        With hundreds of homes fitted with our product, we’ve done almost all kinds of windows. View our photo gallery
        and see how the clear burglar bars will look on your style window.
      </p>

      <a href="{{ route('gallery') }}"
         class="inline-flex items-center divide-x px-6 py-2 border border-white text-base font-medium rounded-md shadow-sm text-white   tracking-wider focus:outline-none hover:bg-white/10 focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
        <span class="pr-2 inline-block font-semibold">VIEW IMAGES</span>
        <span class="pl-2 inline-block">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
               class="w-5 h-5">
            <path fill-rule="evenodd"
                  d="M1 8a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 018.07 3h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0016.07 6H17a2 2 0 012 2v7a2 2 0 01-2 2H3a2 2 0 01-2-2V8zm13.5 3a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM10 14a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd" />
          </svg>
        </span>
      </a>
    </div>
  </section>


  <section class="wrapper my-24">
    <header>
      <h2 class="heading-2 text-center">Have a look at some work we have done.</h2>
    </header>

    <div class="grid grid-cols-3 gap-4 md:gap-6 lg:gap-8 my-12 gallery">
      <a href="{{ Vite::asset('resources/img/bakkie.jpg') }}">
        <img class="rounded-md shadow-2xl shadow-primary/30 border border-gray-300"
             src="{{ Vite::asset('resources/img/bakkie.jpg') }}"
             alt="{{ config('app.name') }} windows with bakkie in background ">
      </a>
      <a href="{{ Vite::asset('resources/img/van.jpg') }}">
        <img class="rounded-md  shadow-2xl shadow-primary/30 border border-gray-300"
             src="{{ Vite::asset('resources/img/van.jpg') }}"
             alt="{{ config('app.name') }} windows with van in background">
      </a>
      <a href="{{ Vite::asset('resources/img/trailer.jpg') }}">
        <img class="rounded-md shadow-2xl shadow-primary/30 border border-gray-300"
             src="{{ Vite::asset('resources/img/trailer.jpg') }}"
             alt="{{ config('app.name') }} window with trailer in background">
      </a>
    </div>
    <div class="text-center">

      <a href="https://www.facebook.com/www.crystalbars.co.za" target="_blank"
         class="inline-flex items-center divide-x px-6 py-2 border border-primary text-base font-medium rounded-md shadow-sm text-white  tracking-wider focus:outline-none hover:bg-primary-400 bg-primary focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
        <span class="pr-2 inline-block font-semibold">VIEW MORE ON FACE BOOK</span>
        <span class="pl-2 inline-block">
   <svg aria-hidden="true" fill="currentColor" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
        viewBox="0 0 20 20"><path
       d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" /></svg>
        </span>
      </a>
    </div>

  </section>
  <div class="wrapper my-24">
    <img src="{{ Vite::asset('resources/img/bars.png')}}" alt="Bars Specs">
  </div>

</x-layout-app>
