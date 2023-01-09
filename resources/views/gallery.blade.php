<x-layout-app>
    @section('title', 'Photo Gallery ')
    <div class="wrapper py-12">
        <h1 class="heading-2 mb-10"><span class="relative z-10">Some of</span>
            <span class="relative">
              <strong class="relative z-10 text-white hero-title">our work</strong>
              <span class="absolute -inset-2 skew-x-12 bg-primary-400 z-0 rotate-1 rounded-md"></span>
          </span>
            </h1>
        <div id="gallery" class="gallery grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-8">
            @foreach($images as $img)
                <a data-fslightbox="gallery" class="overflow-hidden transition-all hover:scale-110 hover:shadow-lg hover:shadow-primary-500/50 rounded-md"
                   href=" {{ asset('img/examples/' . $img) }}">
                    <img loading="lazy" class="min-h-full min-w-full object-cover" src=" {{ asset('img/examples/' . $img) }}"
                         alt="images gallery ">
                </a>
            @endforeach
        </div>

        <div class="flex justify-center my-10">
            <a class="rounded px-5 py-2 bg-primary-500 hover:bg-primary-600 mt-5 inline-block text-white
					font-semibold tracking-tight text-lg"
               target="_blank"
               href="https://www.facebook.com/www.crystalbars.co.za" rel="noreferrer">VIEW MORE ON FACEBOOK</a>
        </div>
    </div>


</x-layout-app>
