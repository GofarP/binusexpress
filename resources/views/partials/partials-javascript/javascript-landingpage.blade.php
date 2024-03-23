
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('landingpage-theme-assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('landingpage-theme-assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('landingpage-theme-assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('landingpage-theme-assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('landingpage-theme/lib/owlcarousel/owl.carousel.min.js')}}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('landingpage-theme-assets/js/main.js')}}"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- ElevateZoom -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/elevateweb/elevatezoom/master/jquery.elevatezoom.css">
    <script src="https://cdn.rawgit.com/elevateweb/elevatezoom/master/jquery.elevatezoom.js"></script>

    <script>
        $(document).ready(function () {
            $(".zoom-image").elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 750
            });
        });
    </script>

