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
          At our company, we take pride in using only the best materials for our products. That's why we use A-grade polycarbonate imported from Europe for our clear burglar bars. We understand that not only the security but also the appearance of the bars is important to our customers.
      </p>
      <p class="text-lg">
          The transparent burglar bars are designed to be both strong and stylish. They are 6 mm thick and 35 mm wide, making them able to withstand significant force and protect your home from potential intruders. To ensure safety, the bars are beveled on both sides with no sharp edges that could cause injury when opening windows.
      </p>
      <p class="text-lg">
          Our clear burglar bars are also designed to withstand the elements. They are UV protected to prevent discoloration and fading due to direct sunlight. This means that they will maintain their clear appearance for years to come, ensuring that the aesthetic of your home is not affected.
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
      <p class="text-lg">
          Made with high-quality materials such as aluminum or steel, our trellis gates are built to withstand significant force and protect your home from potential intruders. The unique trellis design not only adds an elegant aesthetic to your property, but also allows for improved visibility and airflow.
      </p>
      <p class="text-lg">Our trellis security gates are customizable to fit the specific measurements and style of your home. We offer a variety of colors and finishes to match your home's existing design.</p>
      <p class="text-lg">
          In addition to their aesthetic appeal, our trellis gates are also low-maintenance and long-lasting. They are resistant to rust, corrosion and fading, so they will always look as good as new.
      </p>
      <p class="text-lg">
          Don't settle for plain and functional security gates. Choose our trellis gates for the perfect combination of style and security.
      </p>
    </article>

  </section>


</x-layout-app>
