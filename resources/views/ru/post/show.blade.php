@extends('ru.layouts.main')
@section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{asset('storage/' . $post->main_image)}}" alt="">
                        <h1 class="mb-4">{{$post->title}}</h1>
                        <div>
                            {!! $post->content !!}
                        </div>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Комментарии ({{$post->comments->count()}})</h3>
                        </div>
                        @foreach($post->comments as $comment)
                        <div class="d-flex mb-4">
                            <div class="ps-3">
                                <h6><a href="">{{$comment->name}}</a> <small><i>{{$comment->dateAsCarbon->diffForHumans()}}</i></small></h6>
                                {{$comment->message}}
                            </div>
                        </div>
                        @endforeach
                        </div>
                    <!-- Comment List End -->
                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Оставте свой комментарий</h3>
                        </div>
                        <form action="{{route('ru.post.comment.store', $post->id)}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Ваше имя"
                                           style="height: 55px;" name="name">
                                </div>
                            </div>

                            <div class="col-12">
                                    <textarea class="form-control bg-white border-0 mt-3" rows="5"
                                              placeholder="Ваш комментарий" name="message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Отправить комментарий</button>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                    </div>



                <!-- Sidebar Start -->
                <div class="col-lg-4">

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Категорії рецептів</h3>
                        </div>

                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach($categories as $category)
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('category.post.index', $category->id)}}"><i
                                        class=""></i>{{$category->title}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
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
                    </div>
                    <!-- Recent Post End -->

                </div>
                <!-- Sidebar End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
