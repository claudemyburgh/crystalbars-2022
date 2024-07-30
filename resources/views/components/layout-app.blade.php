<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="amp-google-client-id-api" content="gtag">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">

    <title>{{ config('app.name', 'Crystal Bars') }} | @yield('title', 'Transparent burglar bars in Cape Town')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("quote_form").submit();
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,800&family=Raleway:ital,wght@0,900;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '{{ config('google.tagmanager.code') }}');</script>
    <!-- End Google Tag Manager -->

</head>
<body class="antialiased bg-gray-100 text-gray-700 text-light overflow-x-hidden">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id={{ config('google.tagmanager.code') }}"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div>
    <a href="#main"
       class="sr-only focus:not-sr-only focus:fixed focus:z-50 top-5 left-5 inline-block focus:px-4 focus:py-2 focus:shadow-lg rounded-md border border-primary-500 bg-primary-50">Skip
        to main</a>
    @include('partials._navigation')

    @if(request()->is('/'))
        @include('partials._hero')
    @endif

    <main id="main" class="my-24">
        {{ $slot }}
    </main>

    @include('partials._profile')
    @include('partials._footer')
    <button
        class="fixed Z-50 bottom-5 h-12 w-12 border border-gray-500 items-center justify-center rounded shadow-lg shadow-primary/50 right-5 bg-white text-gray-500 flex"
        type="button" is="headless-scrolltop">
        <span class="sr-only">Scroll to top</span>
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12"/>
        </svg>
    </button>

</div>
</body>
</html>
