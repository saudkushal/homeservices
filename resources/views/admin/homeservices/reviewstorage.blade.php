@extends('admin.layout.main')
@section('main')
    <form action="{{ route('review.index') }}" method="GET">
        @csrf
        @method('GET')

        <button type="submit" value="10" name="lifs">
            LastIn-FirstShow
        </button>
    </form>

    <div class="tbl py-10 flex flex-col justify-center items-center">
        <table class="">
            <tr>
                <th class="border border-black">Customer_ID</th>
                <th class="border border-black">Customer_Name</th>
                <th class="border border-black">Customer_Review</th>
                <th class="border border-black">Rating</th>
                <th class="border border-black">Photo</th>
                <th class="border border-black">Actions</th>
            </tr>

            @foreach ($reviews as $key => $review)
                <tr class="text-center">
                    <td class="border border-black">{{ $review->id }}</td>
                    <td class="border border-black">{{ $review->customername }}</td>
                    <td class="border border-black">{{ $review->review }}</td>
                    <td class="border border-black">{{ $review->rating }}</td>
                    <td class="border border-black">{{ $review->photo }}</td>
                    <td class="border border-black">

                        <form action="{{ route('review.destroy', $review->id) }}" method="POST">
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


