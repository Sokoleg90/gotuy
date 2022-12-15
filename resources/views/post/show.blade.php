@extends('layouts.main')
@section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
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
                            <h3 class="mb-0">Коментарі ({{$post->comments->count()}})</h3>
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
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Залиште свій коментар</h3>
                        </div>
                        <form action="{{route('post.comment.store', $post->id)}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Ваше ім'я"
                                           style="height: 55px;" name="name">
                                </div>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0 mt-3" rows="5"
                                              placeholder="Ваш коментар" name="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Надіслати коментар</button>
                                </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
