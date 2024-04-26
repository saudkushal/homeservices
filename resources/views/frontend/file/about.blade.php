@extends('frontend.layout.main')
@section('main')
    <div class="herosection relative flex h-[70vh]">
        <img src="./homeimages/about.avif" class="hero h-full w-full object-cover">
        <div class="hero2 absolute h-full w-full bg-black bg-opacity-20 flex flex-col justify-center items-center">
            <span class="text-5xl font-bold text-white text-center">About Us</span>

        </div>
    </div>

    <div class="info pt-20">
        <div class="grid grid-cols-2 gap-5 items-center max-[600px]:grid-cols-1">
            <div class="portman">
                <img src="./homeimages/all.jpg " class="px-20">
            </div>
            <div class="courierparagraph pr-20 max-[600px]:text-center max-[600px]:px-20">
                <h1 class="heading text-[15px] text-blue-600">About Total Home Services</h1>
                <h1 class="heading font-bold text-[30px] text-blue-800 pt-5">Why will you choose <span
                        class="font-normal text-[30px] text-blue-600">our services?</span></h1>

                <p class="paragraph pt-10">Total Home Services is new in the market but comparises a professional
                    team of well experienced individuals. Each service provider is given proper training to deal
                    with customers maintaing a friendly and comforing behaviour. We meet the standards and
                    regulatory compliances of the government of Nepal. We aim at providing international level
                    services and uplifting the living standard of the indviduals. </p>
            </div>

        </div>


    </div>
    <div class="info pt-20">
        <div class="grid grid-cols-3 gap-5 items-center max-[600px]:grid-cols-1">

            <div class="courierparagraph pl-[28vh] max-[600px]:text-center max-[600px]:px-20">
                <h1
                    class="heading pt-[15vh] text-center text-[60px]  w-[60vh] h-[60vh] rounded-full border-x-4 border-blue-900 rounded-full  font-bold text-left text-blue-600 flex flex-col">
                    20+
                    <span class="font-normal text-[30px] text-blue-600">Professionals At Your Service</span>
                </h1>



            </div>
            <div class="portman col-span-2">
                <img src="./homeimages/teammembers.jpg " class="px-20">
            </div>


        </div>


    </div>

    <div class="relative pt-10 h-[30vh]">
        <div class="absolute h-full w-full bg-cover bg-center bg-no-repeat bg-fixed "
            style="background-image: url({{ asset('homeimages/garden.jpg') }})">
        </div>
        <div class="absolute h-full w-full bg-black bg-opacity-50 flex justify-center items-center">
            <span class="text-white font-bold text-3xl">
                We Are The Best
            </span>
        </div>
    </div>
@endsection
