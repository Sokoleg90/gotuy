@extends('layouts.main')
@section('content')
    <!-- Blog Start -->
 develop
    <!-- component -->
    @foreach($posts as $post)
        <section class="bg-amber-100">
            <div class="container px-6 py-10 mx-auto">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                    <a href="{{route('post.show', $post->id)}}">
                        <img class="object-cover w-full lg:mx-6 lg:w-35rem rounded-xl h-72 lg:h-96" src="{{asset('storage/' . $post->preview_image)}}" alt="">
                    </a>
                    <div class="mt-6 px-10 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                        <a href="{{route('category.post.index', $post->category_id)}}" class="text-sm text-red-700 uppercase">{{$post->category->title}}</a>

                        <a href="{{route('post.show', $post->id)}}" class="block mt-4 text-3xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                            {{$post->title}}
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            {!! \Illuminate\Support\Str::words($post->content, 80, $end='...') !!}
                        </p>
                        <button class="p-2 mt-2 rounded bg-emerald-800 text-white hover:bg-emerald-400 hover:text-black">
                            <a href="{{route('post.show', $post->id)}}">Переглянути весь рецепт</a>
                        </button>

    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="">
                        @foreach($posts as $post)
                            <div>
                                <div class="bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <a href="{{route('post.show', $post->id)}}">
                                            <img class="img-fluid" src="{{asset('storage/' . $post->preview_image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                                            <h4 class="mb-3">{{$post->title}}</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="m-auto">
                        {{$posts->links()}}
                    </div>
                </div>
                <!-- Blog list End -->
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Category Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Категорії рецептів</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach($categories as $category)
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('category.post.index', $category->id)}}">{{$category->title}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->
                    <!-- Recent Post Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Приготуй навмання</h3>
                        </div>
                        @foreach($randomPosts as $post)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{asset('storage/' . $post->preview_image)}}"
                                     style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="{{route('post.show', $post->id)}}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{$post->title}}</a>
                            </div>
                        @endforeach
 master
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    {{ $posts->links('vendor.pagination.tailwind-ua') }}

    <!-- Blog End -->
@endsection


