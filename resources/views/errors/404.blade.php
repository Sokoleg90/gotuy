<!doctype html>
<html class="h-full">
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
<body class="h-full">
@extends('errors::minimal')
<main class="grid min-h-full place-items-center bg-amber-100 px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-emerald-900">404</p>
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Сторінка не знайдена</h1>
        <p class="mt-6 text-base leading-7 text-gray-600">Вибачте, але даної сторінки не існує(</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{route('post.index')}}" class="rounded-md bg-emerald-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Повернутись на головну сторінку</a>
        </div>
    </div>
</main>
</body>
</html>
