<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="img/favicon.png" type="image/png"/>
    <title>Sotra - @yield('title')</title>
    @yield('styles')

<body>
<!--================Header Menu Area =================-->
<x-header/>
<!--================Header Menu Area =================-->

@yield('content')

<!--================ start footer Area  =================-->
<x-footer/>
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="template/js/jquery-3.2.1.min.js"></script>
<script src="template/js/popper.js"></script>
<script src="template/js/bootstrap.min.js"></script>
<script src="template/js/stellar.js"></script>
<script src="template/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="template/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="template/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="template/vendors/isotope/isotope-min.js"></script>
<script src="template/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="template/js/jquery.ajaxchimp.min.js"></script>
<script src="template/js/mail-script.js"></script>
<script src="template/vendors/jquery-ui/jquery-ui.js"></script>
<script src="template/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="template/vendors/counter-up/jquery.counterup.js"></script>
<script src="template/js/theme.js"></script>


</body>

</html>
