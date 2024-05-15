<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('post.index')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Готуй</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin.main.index')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Головна</a>
            <a href="{{route('admin.post.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-clipboard"></i>Рецепти</a>
            <a href="{{route('admin.category.index')}}" class="nav-item nav-link"><i class="nav-icon fa-solid fa-list"></i>Категорії</a>
            <a href="{{route('admin.comment.index')}}" class="nav-item nav-link"><i class="nav-icon fa-regular fa-comment"></i>Коментарі</a>
            </div>
    </nav>
</div>
<!-- Sidebar End -->
