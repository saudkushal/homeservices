@extends('admin.layout.main')
@section('main')

    <div class="button flex flex-col justify-end items-end pr-10 pt-10">
        <a href="{{ route('slink.create') }}"
            class="btn btn-primary border border-black w-[13vw] rounded-md bg-blue-600 h-9 text-center text-white py-1.5 font-bold">+
            Add New Services</a>
    </div>

    <div class="tbl py-10 flex flex-col justify-center items-center">
        <table class="">
            <tr>
                <th class="border border-black">ID</th>
                <th class="border border-black">Logo</th>
                <th class="border border-black">Heading</th>
                <th class="border border-black">Description</th>
                <th class="border border-black">Actions</th>
            </tr>

            @foreach ($slink as $key => $slink)
                <tr class="text-center">
                    <td class="border border-black">{{ $slink->id }}</td>
                    <td class="border border-black">{{ $slink->logo }}</td>
                    <td class="border border-black">{{ $slink->heading }}</td>
                    <td class="border border-black">{{ $slink->description }}</td>
                    <td class="border border-black ">

                        <form action="{{ route('slink.destroy', $slink->id) }}" method="POST">
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
