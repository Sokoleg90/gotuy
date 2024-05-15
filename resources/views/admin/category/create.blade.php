@extends('admin.layouts.main')
@section('content')
    <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="font-semibold text-3xl leading-7 text-gray-900">Додати нову категорію рецептів</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label class="block font-medium leading-6 text-gray-900">Назва категорії</label>
                        <div class="mt-2">
                            <div class="flex sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                <input type="text" name="title" id="title" autocomplete="title" class="block flex-1 py-1.5 rounded-md text-gray-900 placeholder:text-gray-700 focus:ring-0 sm:text-sm sm:leading-6" placeholder="" value="{{old('title')}}">
                                @error('title')
                                <div class="text-red-600">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

        <div class="mt-6 flex items-center justify-start gap-x-6">
            <a href="{{route('admin.category.index')}}">
                <button type="button" class="rounded-md bg-red-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Відміна</button>
            </a>
            <button type="submit" class="rounded-md bg-emerald-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Додати</button>
        </div>
    </form>
@endsection
