@extends('frontend.layout.main')
@section('main')
    <div class="herosection relative flex h-[70vh]">
        <img src="./homeimages/service1.avif" class="hero h-full w-full object-cover">
        <div class="hero2 absolute h-full w-full bg-black bg-opacity-20 flex flex-col justify-center items-center">
            <span class="text-5xl font-bold text-white text-center">Our Services</span>

        </div>
    </div>
    <!-- service section -->
    <div class="services pt-20 px-40 max-sm:px-10">
        <div class="grid grid-cols-3 gap-10 max-[600px]:grid-cols-2">
            @foreach ($slink as $key => $slink)
                <div class="r1 p-4 shadow-lg flex flex-col items-center text-center bg-slate-50">
                    <div
                        class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                        <span class="material-symbols-outlined text-4xl">
                            {!! $slink->logo !!}
                        </span>


                    </div>

                    <h1 class="heading pt-3 font-bold text-xl"> {{ $slink->heading }}</h1>
                    <p class="paragraph pt-2"> {{ $slink->description }}</p>



                </div>
            @endforeach
            {{-- <div class="r1 p-4 shadow-md flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    cleaning
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">Pest Control</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div>
        <div class="r1 p-4 shadow-md flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    deceased
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">Gardening Services</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div>
        <div class="r1 p-4 shadow-md  flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    home_repair_service
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">Repair & Maintainance</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div>
        <div class="r1 p-4 shadow-md  flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    format_paint
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">Painting</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div>
        <div class="r1 p-4 shadow-md  flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    emoji_people
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">Maid Services</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div>
        <div class="r1 p-4 shadow-md  flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    corporate_fare
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">High Rise Building Glass Cleaning</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div>
        <div class="r1 p-4 shadow-md  flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    iron
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">Marbel Cleaning & Polishing</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div>
        <div class="r1 p-4 shadow-md  flex flex-col items-center text-center bg-slate-50">
            <div
                class="icon1 h-[80px] w-[80px] border border-black border-dashed border-2 border-blue-600 rounded-full flex  justify-center items-center ">
                <span class="material-symbols-outlined text-5xl">
                    kitchen
                </span>

            </div>

            <h1 class="heading pt-3 font-bold text-xl">Kitchen Cleaning Services</h1>
            <p class="paragraph pt-2">Sajha Courier and Cargo is widely recognized as one oldest courier company
                in Nepal.</p>



        </div> --}}
        </div>
    </div>
    <div class="relative mt-20 h-[60vh] w-full">
        <div
            class="absolute w-full h-full text-5xl top-0 left-0 bg-black bg-opacity-30 flex flex-col justify-center items-center max-sm:text-center">
            <span class="font-bold text-black text-white">We are glad to get your reviews</span>
        </div>
        <img src="./homeimages/reviews.avif" class="h-full w-full object-cover">
    </div>
@endsection
