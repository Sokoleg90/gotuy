@extends('layouts.main')
@section('content')
    <!-- Blog Start -->
    <!-- component -->
    @foreach($posts as $post)
        <section class="bg-amber-100">
            <div class="container px-6 py-10 mx-auto">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                    <a href="{{route('post.show', $post->slug)}}">
                        <img class="object-cover w-full lg:mx-6 lg:w-35rem rounded-xl h-72 lg:h-96" src="{{asset('storage/' . $post->preview_image)}}" alt="">
                    </a>
                    <div class="mt-6 px-10 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                        <a href="{{route('category.post.index', $post->category_id)}}" class="text-sm text-red-700 uppercase">{{$post->category->title}}</a>

                        <a href="{{route('post.show', $post->slug)}}" class="block mt-4 text-3xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                            {{$post->title}}
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            {!! \Illuminate\Support\Str::words($post->content, 80, $end='...') !!}
                        </p>
                        <button class="p-2 mt-2 rounded bg-emerald-800 text-white hover:bg-emerald-400 hover:text-black">
                            <a href="{{route('post.show', $post->slug)}}">Переглянути весь рецепт</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    {{ $posts->links('vendor.pagination.tailwind-ua') }}

    <!-- Blog End -->
@endsection
