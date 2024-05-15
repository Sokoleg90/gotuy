@extends('admin.layouts.main')
@section('content')
    <!-- component -->
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <h1 class="text-4xl mb-3">Коментарі</h1>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium text-black dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">Id</th>
                            <th scope="col" class="px-6 py-4">Ім'я коментатора</th>
                            <th scope="col" class="px-6 py-4">Текст коментарія</th>
                            <th scope="col" class="px-6 py-4">Змінити</th>
                            <th scope="col" class="px-6 py-4">Видалити</th>
                        </tr>
                        </thead>
                        <tbody class="text-black">
                        @foreach($comments as $comment)
                            <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$comment->id}}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$comment->name}}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$comment->message}}</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <a href="{{route('admin.comment.edit', $comment->id)}}" class="text-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <form action="{{route('admin.comment.destroy', $comment->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
