@extends('layouts.main')
@section('content')
    <!-- Blog Start -->
    <!-- component -->
    <div class="max-w-screen-xl mx-auto">
        <!-- header ends here -->
        <main class="mt-10">
            <div class="mb-4 md:mb-0 w-full mx-auto relative h-96">
                <img src="{{asset('storage/' . $post->main_image)}}" class="absolute left-0 top-0 w-full h-full z-0 object-cover"/>
                <div class="p-2 absolute bottom-0 left-0 z-20">
                    <a href="{{route('category.post.index', $post->category_id)}}"
                       class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{$post->category->title}}</a>

                </div>
            </div>

            <div class="px-4 lg:px-0 mt-8 text-black text-lg leading-relaxed">
                <h2 class="mb-4 text-4xl font-semibold text-black leading-tight">
                    {{$post->title}}
                </h2>
                {!! $post->content !!}
            </div>

            <!-- component -->
            <main class="w-auto h-auto mt-4 flex justify-center items-center">
                <div class="max-w-7xl border-2 border-amber-200">
                    <form class=" w-full p-4 rounded" action="{{route('post.comment.store', $post->id)}}" method="post">
                        @csrf
                        <h2 class="text-3xl mb-4 tracking-wider font-lighter text-gray-900 dark:text-gray-200">Залиште свій коментар</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <div class="mb-4 col-span-1 md:col-span-3">
          <textarea
              name="message"
              class="w-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed resize-none"
              placeholder="Введіть свій коментар"
              rows="5"

              required
          ></textarea>
                            </div>

                            <div class="mb-4">
                                <input
                                    type="text"
                                    name="name"
                                    class="w-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
                                    placeholder="Ваше ім'я"
                                    required
                                />
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button
                                type="submit"
                                class="py-4 px-6 bg-blue-950 text-white rounded-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800"
                            >
                                Відправити коментар
                            </button>
                        </div>
                    </form>
                </div>
            </main>
            <div class="max-w-4xl px-10 py-16 min-w-screen animation-fade animation-delay mx-auto sm:px-12 xl:px-5">

                <p class="mt-1 text-2xl font-bold text-left text-gray-800 sm:mx-6 sm:text-2xl md:text-3xl lg:text-4xl sm:text-center">
                    Усі коментарі ({{$post->comments->count()}})
                </p>
                <!--comment 1-->
                @foreach($post->comments as $comment)
                <div class="flex  items-center w-full px-6 py-6 mx-auto mt-10 border border-amber-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">

                    <div><h3 class="text-lg font-bold text-slate-700 sm:text-xl md:text-2xl">{{$comment->name}}</h3>
                        <p class="text-sm font-bold text-green-600">{{$comment->dateAsCarbon->diffForHumans()}}</p>
                        <p class="mt-2 text-base text-black sm:text-lg md:text-normal">
                            {{$comment->message}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
        <!-- main ends here -->
    </div>
    <!-- Blog End -->
@endsection
