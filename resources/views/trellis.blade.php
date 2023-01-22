<x-layout-app>
    @section('title', 'Trellis security gates')

  <section class="wrapper my-32 flex items-center flex-wrap md:flex-row">
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
        
{{--      <p class="text-lg">--}}
{{--          Made with high-quality materials such as aluminum, our trellis gates are built to withstand significant force and protect your home from potential intruders. The unique trellis design not only adds an elegant aesthetic to your property, but also allows for improved visibility and airflow.--}}
{{--      </p>--}}
{{--      <p class="text-lg">Our trellis security gates are customizable to fit the specific measurements and style of your home. We offer a variety of colors and finishes to match your home's existing design.</p>--}}
{{--      <p class="text-lg">--}}
{{--          In addition to their aesthetic appeal, our trellis gates are also low-maintenance and long-lasting. They are resistant to rust, corrosion and fading, so they will always look as good as new.--}}
{{--      </p>--}}
{{--      <p class="text-lg">--}}
{{--          Don't settle for plain and functional security gates. Choose our trellis gates for the perfect combination of style and security.--}}
{{--      </p>--}}
    </article>

  </section>


    <section class="wrapper">
        <table class="min-w-full divide-y divide-gray-300 border border-gray-300 rounded-md shadow shadow-black/20">
            <thead class="bg-gray-50">
            <tr>
                <th class="text-left font-bold px-4 py-4">Sizes</th>
                <th class="text-left font-bold px-4 py-4 w-[220px]">Price</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
            @foreach($products as $price)
                <tr>
                    <td class="text-left px-4 py-3 text-lg font-semibold">{{ $price['size'] }}</td>
                    <td class="text-left px-4 py-3 text-lg font-semibold">{{ $price['price'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>




</x-layout-app>
