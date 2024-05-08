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
<div class="bg-[url('/public/img/baner-grudinka.jpg')] bg-center h-[600px]">
    <header class="absolute inset-x-0 top-0 z-50 bg-black bg-opacity-60">
        <nav class="flex items-center justify-center p-6 lg:px-8" aria-label="Global">
                <a href="#" class="font-alice text-3xl leading-6 text-white px-5 ">Головна сторінка</a>
                <a href="#" class="font-alice text-3xl leading-6 text-white px-5 hover:">Категорії рецептів</a>
                <a href="#" class="font-alice text-3xl leading-6 text-white px-5 ">Наш Ютуб канал</a>
        </nav>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8 bg-black bg-opacity-50">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-8xl tracking-tight text-white font-pacifico">Готуй в Україні</h1>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
</div>
@yield('content')
</body>
</html>
