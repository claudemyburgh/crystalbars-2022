<x-layout-app>
    @section('title', 'Trellis security gates')

    <section class="wrapper my-40 flex items-center flex-wrap md:flex-row-reverse">
        <figure
            class="overflow-hidden rounded-md shadow-2xl shadow-primary-500/70 lg:scale-125 lg:translate-x-10 mb-6 h-60 md:h-auto relative z-20 w-full md:w-2/5 ">
                  <img class="w-full max-w-full" height="732" width="540" loading="lazy"
           src="{{ asset('img/gate.jpg') }}" alt="{{config('app.name')}} install gate">
        </figure>

        <article class="w-full md:w-3/5 p-4 md:p-6 lg:p-8 rounded-md bg-white shadow space-y-4 relative z-10">
            <header>
                <h2 class="heading-2">
                    Trellis Security Gate
                </h2>
            </header>

            <p class="text-lg">Introducing our top-of-the-line trellis security gates! These gates are
                the perfect combination of style and security for your home or business.
                Our gates are made from durable aluminium and feature a sturdy top rail
                and bottom track for maximum strength. The stainless steel slam lock
                provides added security, ensuring that your property is protected at all
                times.</p>

            <p class="text-lg">Our trellis security gates are also expandable, allowing you to adjust
                the width of the gate to fit your specific needs. These expandable gates
                can be used as trellis gates, folding security gates, sliding security
                gates, retractable security gates, and slam lock security gates.</p>

            <p class="text-lg">We offer a wide range of colors including white, charcoal, bronze and
                grey to complement any style of property. These gates are perfect for
                both residential and commercial use, and are sure to add an extra layer
                of security to your property without compromising on style.</p>

            <p class="text-lg">Don't settle for just any security gate, choose our trellis security
                gates for the best of both worlds. Contact us today to learn more and to
                place your order for your very own expandable, retractable, and slam
                lock security gates. Protect your property in style with our trellis
                gates.</p>
        </article>
    </section>


    <section class="wrapper">

        <header class="text-center max-w-3xl mb-12 mx-auto">
            <h2 class="heading-2 mb-4">
                <span class="relative">
                    <strong class="relative z-10 text-white hero-title">FREE</strong>
                    <span aria-hidden="true" class="absolute -skew-x-6 -inset-4 bg-primary-200 z-0 -rotate-2 rounded-md"></span>
                </span>
                <span class="relative z-10">Installation with your purchase of the Aluminum Trellis Security Gate</span>
            </h2>
            <h3 class="text-xl font-semibold">Aluminum Trellis Security Gate, now available in four stunning color variations. Choose from black, white, bronze or charcoal to perfectly match the aesthetic of your property.</h3>
        </header>

        <div class="grid md:grid-cols-2 gap-4 md:gap-6 lg:gap-8">
            <div class="grid grid-cols-2 gap-4 md:gap-6 lg:gap-8">
                <div class="bg-white rounded-md shadow shadow-black/30 p-4 flex items-center justify-center">
                    <span class="text-gray-700 text-3xl font-black">White</span>
                </div>
                <div class="bg-[#453a31] rounded-md shadow shadow-black/30 p-4  flex items-center justify-center">
                    <span class="text-gray-50 text-3xl font-black">Bronze</span>
                </div>
                <div class="bg-[#1b191a] rounded-md shadow shadow-black/30 p-4  flex items-center justify-center">
                    <span class="text-gray-50 text-3xl font-black">Charcoal</span>
                </div>
                <div class="bg-[#111] rounded-md shadow shadow-black/30 p-4  flex items-center justify-center">
                    <span class="text-gray-50 text-3xl font-black">Black</span>
                </div>
            </div>

            <table class="min-w-full divide-y divide-gray-300 border border-gray-300 rounded-md shadow shadow-black/10 overflow-hidden">
                <thead class="bg-gray-50">
                <tr>
                    <th class="text-left font-bold px-4 py-4 text-2xl">Sizes</th>
                    <th class="text-right font-bold px-4 py-4 text-2xl  w-[220px]">Price</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                @foreach($products as $price)
                    <tr class="even:bg-gray-50">
                        <td class="text-left px-4 py-3 text-gray-500 text-lg font-semibold">{{ $price['size'] }}</td>
                        <td class="text-right px-4 py-3 text-gray-500 text-lg font-semibold">{{ $price['price'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </section>


</x-layout-app>
