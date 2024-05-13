@extends('layouts.main')
@section('content')
    <!-- Blog Start -->
    <!-- component -->
    <div class="max-w-screen-xl mx-auto">
        <!-- header ends here -->

        <main class="mt-10">
            <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative h-96">
                <img src="{{asset('storage/' . $post->main_image)}}" class="absolute left-0 top-0 w-full h-full z-0 object-cover"/>
                <div class="p-2 absolute bottom-0 left-0 z-20">
                    <a href="{{route('category.post.index', $post->category_id)}}"
                       class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{$post->category->title}}</a>

                </div>
            </div>

            <div class="px-4 lg:px-0 mt-8 text-black max-w-screen-md mx-auto text-lg leading-relaxed">
                <h2 class="mb-4 text-4xl font-semibold text-black leading-tight">
                    {{$post->title}}
                </h2>
               {{$post->content}}
            </div>

            <!-- component -->
            <main class="w-auto h-auto mt-4 flex justify-center items-center dark:bg-gray-900">
                <div class="max-w-7xl dark:bg-gray-950 dark:text-white">
                    <form class=" w-full p-4 rounded shadow-md" action="/submit-comment" method="post">
                        <h2 class="text-xl mb-4 tracking-wider font-lighter text-gray-900 dark:text-gray-200">Leave a Comment</h2>
                        <p class="text-gray-600 mb-4">Your email address will not be published. Required fields are marked *</p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <div class="mb-4 col-span-1 md:col-span-3">
          <textarea
              id="comment"
              name="comment"
              class="w-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed resize-none"
              placeholder="Type Comment...*"
              rows="5"

              required
          ></textarea>
                            </div>

                            <div class="mb-4">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="w-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
                                    placeholder="Name*"
                                    required
                                />
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button
                                type="submit"
                                class="py-4 px-6 bg-blue-950 text-white rounded-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800"
                            >
                                Post Comment →
                            </button>
                        </div>
                    </form>
                </div>
            </main>
            <div class="max-w-4xl px-10 py-16 mx-auto bg-gray-100  bg-white min-w-screen animation-fade animation-delay  px-0 px-8 mx-auto sm:px-12 xl:px-5">

                <p class="mt-1 text-2xl font-bold text-left text-gray-800 sm:mx-6 sm:text-2xl md:text-3xl lg:text-4xl sm:text-center sm:mx-0">
                    All comments on this post
                </p>
                <!--comment 1-->
                <div class="flex  items-center w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">

                    <a href="#" class="flex items-center mt-6 mb-6 mr-6"><img src="https://avatars.githubusercontent.com/u/71964085?v=4" alt="avatar" class="hidden object-cover w-14 h-14 mx-4 rounded-full sm:block">
                    </a>

                    <div><h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">By James Amos</h3>
                        <p class="text-sm font-bold text-gray-300">August 22,2021</p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Please help with how you did the migrations for the blog database fields.I tried mine using exactly what you instructed but its not working!!.</p>
                    </div>

                </div>
                <!--comment 2-->
                <div class="flex  items-center w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">

                    <a href="#" class="flex items-center mt-6 mb-6 mr-6"><img src="https://avatars.githubusercontent.com/u/71964085?v=4" alt="avatar" class="hidden object-cover w-14 h-14 mx-4 rounded-full sm:block">
                    </a>

                    <div><h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">By James Amos</h3>
                        <p class="text-sm font-bold text-gray-300">August 22,2021</p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Especially I dont understand the concepts of multiple models.What really is the difference between the blog model and blogApp model? Am stuck</p>
                    </div>
                </div>

            </div>
    </div>
    </div>
        </main>
        <!-- main ends here -->
    </div>
    <!-- Blog End -->
@endsection
