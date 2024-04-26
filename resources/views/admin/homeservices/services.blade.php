@extends('admin.layout.main')
@section('main')
    <div class="relative w-[16vw] max-sm:w-[35vw]">
        <form action="{{ route('services.index') }}">
            <input type="text" name="search" id="search" placeholder="Search"
                class="border border-black rounded-full h-9">
            <button type="submit" class="absolute top-0 right-0 border border-black h-9 rounded-full px-3 bg-black"><span
                    class="material-symbols-outlined text-white pt-1">
                    search
                </span>
            </button>
        </form>
    </div>


    @if (Session()->has('success'))
        {{ Session::get('Your Product Has Been Added Successfullly.') }}
    @endif

    <div class="button flex flex-col justify-end items-end pr-10 pt-10">
        <a href="{{ route('services.create') }}"
            class="btn btn-primary border border-black w-[10vw] rounded-md bg-blue-600 h-9 text-center text-white py-1.5 font-bold">+
            Add Product</a>
    </div>

    <div class="tbl py-10 flex flex-col justify-center items-center">
        <table class="">
            <tr>
                <th class="border border-black">Service_ID</th>
                <th class="border border-black">Service_Name</th>
                <th class="border border-black">Service_Images</th>
                <th class="border border-black">Description</th>
                <th class="border border-black">Created_At</th>
                <th class="border border-black">Actions</th>
            </tr>

            @foreach ($services as $key => $service)
                <tr class="text-center">
                    <td class="border border-black">{{ $service->id }}</td>
                    <td class="border border-black">{{ $service->servicename }}</td>
                    <td class="border border-black">{{ $service->serviceimage }}</td>
                    <td class="border border-black">{{ $service->description }}</td>
                    <td class="border border-black">{{ $service->created_at }}</td>
                    <td class="border border-black flex">



                        <a href="{{ route('services.edit', $service->id) }}">
                            <span class="material-symbols-outlined text-black ">
                                edit_square
                            </span>

                        </a>





                        <a href="{{ route('services.show', $service->id) }}">
                            <span class="material-symbols-outlined text-blue-600">
                                visibility
                            </span>
                        </a>




                        <form action="{{ route('services.destroy', $service->id) }}" method="POST">
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
