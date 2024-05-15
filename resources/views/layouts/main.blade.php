 develop
<!doctype html>
<html>
<head>
=======
<!DOCTYPE html>
<html lang="uk">

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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7484873602226534"
            crossorigin="anonymous"></script>
 master
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Смачні страви, приготовані в Україні" name="description">
    <title>Готуй в Україні</title>
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 develop
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&Alice" rel="stylesheet">
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Caveat:wght@700&display=swap" rel="stylesheet">
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


 master
</head>
<body>
 develop
<div class="bg-amber-100">
<div class="bg-[url('/public/img/baner-grudinka.jpg')] bg-center h-[600px]">
    <header class="absolute inset-x-0 top-0 z-50 bg-black bg-opacity-60">
        <nav class="flex items-center justify-center p-6 lg:px-8" aria-label="Global">
                <a href="{{route('post.index')}}" class="font-alice text-3xl leading-6 text-white px-5">Головна сторінка</a>
                <a href="{{route('category.index')}}" class="font-alice text-3xl leading-6 text-white px-5">Категорії рецептів</a>
                <a href="https://www.youtube.com/@gotuy" class="font-alice text-3xl leading-6 text-white px-5 ">Наш Ютуб канал</a>
        </nav>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8 bg-black bg-opacity-50">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-8xl tracking-tight text-white font-pacifico">Готуй в Україні</h1>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0 ">
    <div class="container-fluid py-5 bg-header">
        <div class="d-grid gap-2 d-md-flex justify-content-between">
            <div>
                <small class="text-light mx-4"><i class="fa fa-envelope-open me-2"></i>gotuy.in.ua@gmail.com</small>
                <a class="btn btn-sm btn-outline-light rounded-circle" href="https://www.youtube.com/@gotuy"><i class="fab fa-youtube fw-bold"></i>YouTube</a>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="main-title display-4 text-white">Готуй в Україні</h1>
                <a href="{{route('post.index')}}" class="h5 text-white">Головна сторінка</a>
 master
            </div>
        </div>
    </div>
</div>
 develop

<!-- Navbar End -->

 master
@yield('content')

<footer class="footer footer-center w-full p-4 bg-gray-800 text-white">
    <div class="text-center">
        <p>
            © 2024
            <a class="font-semibold" href="https://www.gotuy.in.ua">Готуй в Україні</a>
            . All rights reserved.
        </p>
    </div>
</footer>
</div>
</body>
</html>
