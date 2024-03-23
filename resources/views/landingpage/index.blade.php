<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    @include('partials.partials-css.css-landingpage')

    <style>
        figure.zoom {
            position: relative;
            width: 500px;
            overflow: hidden;
            cursor: zoom-in;
        }

        figure.zoom img:hover {
            opacity: 0;
        }

        figure.zoom img {
            transition: opacity 0.5s;
            display: block;
            width: 100%;
            background-position: 50% 50%;
        }
    </style>

</head>

<body>

    <!-- Spinner Start -->
    @include('partials.partials-landingpage.spinner')
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('partials.partials-landingpage.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    @include('partials.partials-landingpage.navbar-carousel')
    <!-- Navbar & Carousel End -->


    <!-- Tracking Start -->
    @include('partials.partials-landingpage.tracking')
    <!-- Tracking End -->
    <!-- Facts Start -->
    {{-- <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facts Start -->


    <!-- About Start -->
    @include('partials.partials-landingpage.about')
    <!-- About End -->


    <!-- Features Start -->
    @include('partials.partials-landingpage.features')
    <!-- Features Start -->


    <!-- Service Start -->
    @include('partials.partials-landingpage.service')
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    @include('partials.partials-landingpage.pricingplan')
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
    {{-- @include('partials.partials-landingpage.testimonial') --}}
    <!-- Testimonial End -->


    <!-- Team Start -->
    {{-- @include('partials.partials-landingpage.team') --}}
    <!-- Team End -->


    <!-- Blog Start -->
    {{-- @include('partials.partials-landingpage.blog') --}}
    <!-- Blog Start -->


    <!-- Vendor Start -->
    @include('partials.partials-landingpage.vendor')
    <!-- Vendor End -->


    <!-- Footer Start -->
    @include('partials.partials-landingpage.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('partials.partials-javascript.javascript-landingpage')



</body>

</html>
