<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Adminka GOTUY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body>
<div class="flex flex-row min-h-screen bg-gray-100 text-gray-800">
    @include('admin.includes.sidebar')
    <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
        <header class="header bg-gray-800 shadow py-4 px-4">
            <div class="header-content flex items-center flex-row">
                <div class="flex ml-auto">
                    <button type="button" class="text-white text-3xl hover:text-4xl hover:text-red-700">Выйти</button>
                </div>
            </div>
        </header>
        <div class="main-content flex flex-col flex-grow p-4 bg-gray-500">
            @yield('content')
        </div>
        <footer class="footer px-4 py-6 bg-gray-800">
            <div class="footer-content">
                <p class="text-sm text-white text-center">© Gotuy.in.ua 2024. All rights reserved.</p>
            </div>
        </footer>
    </main>
</div>
</body>
</html>
