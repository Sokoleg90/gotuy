@extends('admin.layouts.main')
@section('content')
    <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="font-semibold text-3xl leading-7 text-gray-900">Додати новий рецепт</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label class="block font-medium leading-6 text-gray-900">Назва рецепта</label>
                        <div class="mt-2">
                            <div class="flex sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                <input type="text" name="title" id="title" autocomplete="title"
                                       class="block flex-1 py-1.5 rounded-md text-gray-900 placeholder:text-gray-700 focus:ring-0 sm:text-sm sm:leading-6"
                                       placeholder="" value="{{old('title')}}">
                                @error('title')
                                <div class="text-red-600">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Напишіть рецепт</label>
                        <div class="mt-2">
                        <textarea id="editor" name="content"
                                  class="">
                            {{old('content')}}
                        </textarea>
                            @error('content')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Виберіть картинку
                            предперегляду</label>
                        <div class="mt-2 flex items-center gap-x-3">
                            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <input type="file" name="preview_image"
                                   class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            @error('preview_image')
                            <div class="text-red-700">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Виберіть основну
                            картинку</label>
                        <div class="mt-2 flex items-center gap-x-3">
                            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <input type="file" name="main_image"
                                   class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            @error('main_image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Виберіть категорію
                            рецепта</label>
                        <div class="mt-2">
                            <select name="category_id"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                @foreach($categories as $category)
                                    <option value={{$category->id}}
                                        {{$category->id == old('category_id') ? 'selected' : ''}}
                                    >{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-start gap-x-6">
            <a href="{{route('admin.post.index')}}">
                <button type="button"
                        class="rounded-md bg-red-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Відміна
                </button>
            </a>
            <button type="submit"
                    class="rounded-md bg-emerald-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Додати
            </button>
        </div>
    </form>
@endsection
