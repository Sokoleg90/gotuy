@extends('layouts.main')
@section('content')
    <!-- Blog Start -->
    <!-- component -->
    @foreach($posts as $post)
    <section class="bg-white">
        <div class="container px-6 py-10 mx-auto">
            <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                <a href="{{route('post.show', $post->id)}}">
                    <img class="img-fluid" src="{{asset('storage/' . $post->preview_image)}}" alt="">
                </a>

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    @foreach($categories as $category)
                    <a href="{{route('category.post.index', $category->id)}}" class="text-sm text-blue-500 uppercase">{{$category->title}}</a>
                        @endforeach
                    <a href="{{route('post.show', $post->id)}}" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                        {{$post->title}}
                    </a>

                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                        laudantium quia tempore delect
                    </p>

                    <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                    <div class="flex items-center mt-6">
                        <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                        <div class="mx-4">
                            <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- Blog End -->
@endsection


