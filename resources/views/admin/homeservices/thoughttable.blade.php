@extends('admin.layout.main')
@section('main')

    <div class="relative w-[16vw] max-sm:w-[35vw]">
        <form action="{{ route('custthought.index') }}">
            <input type="text" name="search" id="search" placeholder="Search"
                class="border border-black rounded-full h-9">
                <button type="submit" class="absolute top-0 right-0 border border-black h-9 rounded-full px-3 bg-black"><span
                        class="material-symbols-outlined text-white pt-1">
                        search
                    </span>
                </button>
        </form>
    </div>

    <div class="options flex gap-5 pt-10">
        <div class="messages bg-blue-600 w-[20vw] h-[10vh] text-center font-bold text-white text-xl py-3">
            <h1>Total Messages</h1>
            <p class="text-right pr-2">{{ $count }}</p>

        </div>

        <div class="messages flex gap-3 px-2 bg-blue-600 w-[10vw] h-[10vh] font-bold text-white text-xl py-3"
            id="show">
            <h1>Sort By</h1>
            <span class="material-symbols-outlined text-3xl">
                sort
            </span>


        </div>

        <div class="absolute pl-[21.5vw] pt-[10vh]">
            <div class="hidden bg-blue-300 font-bold text-black w-[10vw]  " id="aa">
                <form action="{{ route('custthought.index') }}" method="GET">
                    @csrf
                    @method('GET')

                    <button type="submit" value="10" name="sortAlpa">
                        Alphabetically
                    </button>
                </form>

                <form action="{{ route('custthought.index') }}" method="GET">
                    @csrf
                    @method('GET')
                    {{-- <input type="hidden" name="date" id="date" value="10"> --}}
                    <button type="submit" value="10" name="date">
                        Date
                    </button>
                </form>

                <form action="{{ route('custthought.index') }}" method="GET">
                    @csrf
                    @method('GET')

                    <button type="submit" value="10" name="lifs">
                        LastIn-FirstShow
                    </button>
                </form>
            </div>


        </div>

    </div>
    <div class="pt-10 flex justify-center">
        <table class="w-[40vw]">
            <tr>
                <th class="border border-black">CustomersThought</th>
                <th class="border border-black">Date</th>
            </tr>
            @foreach ($thought as $key => $thought)
                <tr class="">
                    <td class="border border-black">{{ $thought->customerthought }}</td>
                    <td class="border border-black">{{ $thought->created_at->format('Y,M,d H:i:s a') }}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        var hide = $('#aa');
        var show = $('#show'); // Corrected the selector syntax

        show.click(function() { // Corrected the click event syntax
            hide.toggle();
        });
    });
</script>
