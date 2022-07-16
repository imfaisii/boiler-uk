<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.front.assets.styles')
    @stack('extended-css')

</head>

<body>

    <!-- Preloader Start -->
    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>{{ config('app.name') }}</h2>
        </div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->

    <x-front-partials.header-component />

    <!-- End Header -->

    @yield('content')

    <!-- Star Footer
    ============================================= -->
    <x-front-partials.footer-component />
    <!-- End Footer-->

    @include('partials.front.assets.scripts')
    @stack('extended-js')
</body>

</html>
