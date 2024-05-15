@extends('admin.layouts.main')
@section('content')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-users"></i>
                    <div class="ms-3">
                        <h3>{{$data['usersCount']}}</h3>
                        <p>Пользователи</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-regular fa-clipboard"></i>
                    <div class="ms-3">
                        <p>Посты</p>
                        <h3>{{$data['postsCount']}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <div class="ms-3">
                        <p>Категории</p>
                        <h3>{{$data['categoriesCount']}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->
@endsection
