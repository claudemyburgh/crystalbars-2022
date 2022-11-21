<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="amp-google-client-id-api" content="gtag">
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">

    <title>{{ config('app.name', 'Crystal Bars') }} | @yield('title', 'Transparent burglar bars in Cape Town')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,800&family=Raleway:ital,wght@0,900;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75033958-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());
        gtag("config", "UA-75033958-1");
    </script>

</head>
<body class="antialiased bg-gray-100 text-gray-700 text-light overflow-x-hidden" data-barba="wrapper">
<!-- Global site tag (gtag) - Google Ads: 964038674 -->
<amp-analytics type="gtag" data-credentials="include">
    <script type="application/json">
       { "vars": { "gtag_id": "AW-964038674", "config": { "AW-964038674": { "groups": "default" } } }, "triggers": { } }
    </script>
</amp-analytics>

<div data-barba="container">
    <a href="#main" class="sr-only">Skip to main</a>
    @include('partials._navigation')
    <main id="main">
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
                  d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
        </svg>
    </button>

</div>

</body>
</html>
