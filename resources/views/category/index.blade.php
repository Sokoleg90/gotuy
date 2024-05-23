@extends('layouts.main')
@section('content')
    <main>
        <div class="bg-amber-100">
            <section>
                <ul class="flex flex-col items-center">
                    @foreach($categories as $category)
                    <li class="text-4xl my-3 text-black font-alice hover:text-5xl hover:text-red-700"><a href="{{route('category.post.index', $category->slug)}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </section>
        </div>
    </main>
@endsection

