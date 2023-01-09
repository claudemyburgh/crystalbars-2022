<x-layout-app>

    @section('title', 'Products')

  <section class="wrapper mt-36 mb-4 flex items-center flex-wrap ">
    <figure
      class="overflow-hidden rounded-md shadow-2xl shadow-primary/50 mb-6 h-60 md:h-auto relative z-20 w-full md:w-1/3 ">
      <img class="w-full max-w-full" height="732" width="540" loading="lazy"
           src="{{ asset('img/stand.jpg') }}" alt="{{config('app.name')}} stand at homemakers expo">
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
    </article>

  </section>

  <section class="wrapper mb-24 flex items-center flex-wrap md:flex-row-reverse">
    <figure
      class="overflow-hidden rounded-md shadow-2xl shadow-primary/50 mb-6 h-60 md:h-auto relative z-20 w-full md:w-1/3 ">
      <img class="w-full max-w-full" height="732" width="540" loading="lazy"
           src="{{ asset('img/gate.jpg') }}" alt="{{config('app.name')}} install gate">
    </figure>

    <article id="trellis" class="w-full md:w-2/3 p-4 md:p-6 lg:p-8 rounded-md bg-white shadow space-y-4">
      <header>
        <h2 class="heading-2">
           Trellis Security Gate
        </h2>
      </header>
{{--      <p class="text-lg">--}}
{{--        For our clear burglar bars, we use A-grade polycarbonate that is imported from Europe. The transparent burglar--}}
{{--        bar is 6 mm thick and 35 mm wide. The bars are beveled on both sides so that there are no sharp edges that could--}}
{{--        cut you when opening the windows. They are UV protected to prevent them from discolouring in the direct sun.--}}
{{--      </p>--}}
{{--      <p class="text-lg">We serve Cape Town area and surroundings.</p>--}}
    </article>

  </section>


</x-layout-app>
