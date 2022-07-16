<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.front.assets.styles')
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

    <!-- Start Banner
    ============================================= -->
    <x-front-partials.banner-component />
    <!-- End Banner -->

    <!-- Start Features
    ============================================= -->
    <x-front-partials.features-component />
    <!-- End Features -->

    <!-- Star Main Services
    ============================================= -->
    <x-front-partials.main-services-component />
    <!-- End Main Services Area -->

    <!-- Star About
    ============================================= -->
    <x-front-partials.about-component />
    <!-- End About -->

    {{-- <!-- Start Case Studies Area
    ============================================= -->
    <x-front-partials.case-study-component />
    <!-- End Case Studies Area --> --}}

    <!-- Star Faq
    ============================================= -->
    <x-front-partials.faq-component />
    <!-- End Faq -->

    {{-- <!-- Start Pricing Area
    ============================================= -->
    <x-front-partials.pricing-component />
    <!-- End Pricing Area --> --}}

    <!-- Star Testimonials
    ============================================= -->
    <x-front-partials.testimonials-component />
    <!-- End Testimonials -->

    {{-- <!-- Star Blog
    ============================================= -->
    <x-front-partials.blog-component />
    <!-- End Blog --> --}}

    <!-- Star Footer
    ============================================= -->
    <x-front-partials.footer-component />
    <!-- End Footer-->

    @include('partials.front.assets.scripts')

</body>

</html>
