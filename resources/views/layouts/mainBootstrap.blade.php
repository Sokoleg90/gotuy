<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="alternate" hreflang="uk" href="https://www.gotuy.in.ua/"/>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E6NJR2SX55"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E6NJR2SX55');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1207883767393921"
            crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Готуй в Україні</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Смачні страви, приготовані в Україні" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link  href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib1/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib1/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css1/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css1/animate.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css1/style.css')}}" rel="stylesheet">


</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid py-5 bg-header">
        <div class="bg-dark">
            <div>
                <small class="text-light mx-4"><i class="fa fa-envelope-open me-2"></i>gotuy.in.ua@gmail.com</small>
                <a class="btn btn-sm btn-outline-light rounded-circle" href="https://www.youtube.com/@gotuy"><i class="fab fa-youtube fw-bold"></i>YouTube</a>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Готуй in Ukraine</h1>
                <a href="{{route('post.index')}}" class="h5 text-white">Головна сторінка</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


@yield('content')


<!-- Footer Start -->
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">gotuy.in.ua</a>. All Rights Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib1/wow/wow.min.js')}}"></script>
<script src="{{asset('lib1/easing/easing.min.js')}}"></script>
<script src="{{asset('lib1/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib1/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib1/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib1/animate/animate.min.css')}}"></script>
<script src="{{asset('lib1/animate/animate.min.css')}}"></script>

<!-- Template Javascript -->

<script src="{{asset('js1/main.js')}}"></script>
</body>

</html>
