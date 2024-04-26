@extends('frontend.layout.main')
@section('main')
    <div class="pt-10 font-bold text-black text-5xl text-center max-sm:text-3xl">
        <span>-----We Provide Professional Services-----</span>

    </div>


    <div class="">
        @if (count($searchservice) > 0)
            @foreach ($searchservice as $key => $service)
                <div class=" relative mx-2 my-5">
                    <div class="absolute px-2 top-0 left-0 font-bold text-[70px] text-white text-center w-full h-full bg-black bg-opacity-30 flex flex-col justify-center items-center">
                        {{ $service->servicename }}
                    </div>
                    <img class=" h-[60vh] w-full object-cover " src="{{ asset('/uploads/' . $service->serviceimage) }}">
                </div>
    </div>
    @endforeach
@else
    <div class="text-black py-20 px-10">

        no
    </div>
    @endif










    </div>

@endsection
