<x-layout-app>
    @section('title', 'Photo Gallery ')
    <div class="wrapper py-40">
        <h1 class="heading-2 mb-10">Some of our work</h1>
        <div id="gallery" class="gallery grid grid-cols-12 gap-4">
            @foreach($images as $img)
                <a data-fslightbox="gallery" class="col-span-6 md:col-span-3 overflow-hidden shadow-2xl rounded-md"
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
