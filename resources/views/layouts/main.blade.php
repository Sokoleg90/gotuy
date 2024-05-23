<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Смачні страви, приготовані в Україні" name="description">
    <title>Готуй в Україні</title>
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&Alice" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-amber-100">
    <div class="bg-[url('/public/img/baner-grudinka.jpg')] bg-center h-[600px]">
        <header class="absolute inset-x-0 top-0 z-50 bg-black bg-opacity-60">
            <nav class="flex items-center justify-center p-6 lg:px-8" aria-label="Global">
                <a href="{{route('post.index')}}" class="font-alice text-2xl leading-6 text-white px-3">Головна сторінка</a>
                <a href="{{route('category.index')}}" class="font-alice text-2xl leading-6 text-white px-3">Категорії рецептів</a>
                <a href="https://www.youtube.com/@gotuy" class="font-alice text-2xl leading-6 text-white px-3">Наш Ютуб канал</a>
            </nav>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8 bg-black bg-opacity-50">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-8xl tracking-tight text-white font-pacifico">Готуй в Україні</h1>
                </div>
            </div>
        </div>
    </div>
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
