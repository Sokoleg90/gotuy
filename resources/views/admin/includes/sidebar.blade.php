<aside
    class="sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-gray-800"
>
    <div class="sidebar-header flex items-center justify-center py-4">
        <div class="inline-flex mb-8">
            <a href="{{route('post.index')}}" class="inline-flex flex-row items-center">
                <span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">Готуй в Україні</span>
            </a>
        </div>
    </div>
    <!--            Sidebar content-->
    <div class="sidebar-content">
        <ul class="flex flex-col items-center">
            <li class="my-4">
                <span class="text-white text-3xl hover:text-4xl hover:text-red-700">
                <a href="{{route('admin.main.index')}}">Головна</a>
                </span>
            </li>
            <li class="my-4">
                <span class="text-white text-3xl hover:text-4xl hover:text-red-700">
                <a href="{{route('admin.post.index')}}">Рецепти</a>
                </span>
            </li>
            <li class="my-4">
                <span class="text-white text-3xl hover:text-4xl hover:text-red-700">
                <a href="{{route('admin.category.index')}}">Категорії</a>
                </span>
            </li>
            <li class="my-4">
                <span class="text-white text-3xl hover:text-4xl hover:text-red-700">
                <a href="{{route('admin.comment.index')}}">Коментарі</a>
                </span>
            </li>

        </ul>
    </div>
    <!--                    /Sidebar content-->
</aside>
