<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('post.index')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Готуй</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{auth()->user()->name}}</h6>
                <span>{{auth()->user()->role}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin.main.index')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Главная</a>
            <a href="{{route('admin.user.index')}}" class="nav-item nav-link"><i class="nav-icon fa-solid fa-users"></i>Пользователи</a>
            <a href="{{route('admin.post.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-clipboard"></i>Посты на украинском языке</a>
            <a href="{{route('admin.ru.post.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-clipboard"></i>Посты на русском языке</a>
            <a href="{{route('admin.en.post.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-clipboard"></i>Посты на английском языке</a>
            <a href="{{route('admin.category.index')}}" class="nav-item nav-link"><i class="nav-icon fa-solid fa-list"></i>Категории на украинском языке</a>
            <a href="{{route('admin.ru.category.index')}}" class="nav-item nav-link"><i class="nav-icon fa-solid fa-list"></i>Категории на русском языке</a>
            <a href="{{route('admin.en.category.index')}}" class="nav-item nav-link"><i class="nav-icon fa-solid fa-list"></i>Категории на английском языке</a>
            <a href="{{route('admin.comment.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-comment"></i>Комментарии на украинском языке</a>
            <a href="{{route('admin.ru.comment.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-comment"></i>Комментарии на русском языке</a>
            <a href="{{route('admin.en.comment.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-comment"></i>Комментарии на английском языке</a>
            </div>
    </nav>
</div>
<!-- Sidebar End -->
