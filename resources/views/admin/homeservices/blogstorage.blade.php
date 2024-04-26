@extends('admin.layout.main')
@section('main')



    <div class="button flex flex-col justify-end items-end pr-10 pt-10">
        <a href="{{ route('blog.create') }}"
            class="btn btn-primary border border-black w-[10vw] rounded-md bg-blue-600 h-9 text-center text-white py-1.5 font-bold">+
            Add Blog</a>
    </div>

    <div class="tbl py-10 flex flex-col justify-center items-center">
        <table class="">
            <tr>
                <th class="border border-black">Blog_ID</th>
                <th class="border border-black">Blog_Date</th>
                <th class="border border-black">Blog_Name</th>
                <th class="border border-black">Content</th>
                <th class="border border-black">Actions</th>
            </tr>

            @foreach ($blog as $key => $blog)
                <tr class="text-center">
                    <td class="border border-black">{{ $blog->id }}</td>
                    <td class="border border-black">{{ $blog->blogdate }}</td>
                    <td class="border border-black">{{ $blog->blogname }}</td>
                    <td class="border border-black">{{ $blog->content }}</td>
                    <td class="border border-black ">

                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit"><span class="material-symbols-outlined text-red-600">delete</span>
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

