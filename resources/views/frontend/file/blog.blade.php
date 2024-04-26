@extends('frontend.layout.main')
@section('main')
    <div class="herosection relative flex h-[70vh]">
        <img src="./homeimages/blog.jpg" class="hero h-full w-full object-cover">
        <div class="hero2 absolute h-full w-full bg-black bg-opacity-30 flex flex-col justify-center items-center">
            <span class="text-5xl font-bold text-white text-center">Blog</span>

        </div>
    </div>
    <div class="heading pt-10 px-[200px] max-sm:px-[100px]">
        <h1 class="heading font-bold text-[30px] text-blue-800 pt-5">Learn about our latest</h1>
        <span class="font-normal text-[30px] text-blue-800">news from blog.</span></h1>

    </div>
    <div class="content">
        <div class="grid grid-cols-3 pt-10 pl-[200px] gap-10 max-sm:grid-cols-1 max-sm:pl-[150px]">
            @foreach ($blog as $key => $blog)
                <div class="r1 h-[50vh] w-[50vh] border bg-white shadow-lg relative flex">
                    <div class="absolute bg-blue-600 top-[10px] left-[10px] text-center text-white font-bold">
                        {{ $blog->blogdate }}

                    </div>
                    <img src="./homeimages/aqw.jpg" class="top-0 left-0 h-full w-[50%] ">
                    <h1 class="heading pt-3 w-4 px-3 font-bold text-2xl text-blue-800">{{ $blog->blogname }}</h1>

                    <a href="{{ route('blogcontent',$blog->id) }}"
                        class="btn btn-primary absolute top-[200px] right-[20px] w-[8vw] bg-blue-600 h-[7vh] text-center text-white py-2 font-bold">
                        Read More</a>

                </div>
            @endforeach
            {{-- <div class="r1 h-[50vh] w-[50vh] border bg-white shadow-lg relative flex">
            <div class="absolute bg-blue-600 top-[10px] left-[10px] text-center text-white font-bold">
                <h1>10</h1>
                <p>Feb,24</p>

            </div>
            <img src="./homeimages/aqw.jpg" class="top-0 left-0 h-full w-[50%] ">


            <h1 class="heading pt-3 w-4 px-3 font-bold text-2xl text-blue-800">Understand The Gardening Process
            </h1>
            <button type="button"
                class="absolute trackbtn top-[200px] right-[20px] bg-blue-600 h-[10vh] w-[20vh] font-bold text-white">Read
                More</button>
        </div>
        <div class="r1 h-[50vh] w-[50vh] border bg-white shadow-lg relative flex">
            <div class="absolute bg-blue-600 top-[10px] left-[10px] text-center text-white font-bold">
                <h1>29</h1>
                <p>Jan,24</p>

            </div>
            <img src="./homeimages/aqw.jpg" class="top-0 left-0 h-full w-[50%] ">


            <h1 class="heading pt-3 w-4 px-3 font-bold text-2xl text-blue-800">Understand The Painting Process
            </h1>
            <button type="button"
                class="absolute trackbtn top-[200px] right-[20px] bg-blue-600 h-[10vh] w-[20vh] font-bold text-white">Read
                More</button>

        </div>
        <div class="r1 h-[50vh] w-[50vh] border bg-white shadow-lg relative flex">
            <div class="absolute bg-blue-600 top-[10px] left-[10px] text-center text-white font-bold">
                <h1>12</h1>
                <p>Jan,24</p>

            </div>
            <img src="./homeimages/aqw.jpg" class="top-0 left-0 h-full w-[50%] ">


            <h1 class="heading pt-3 w-4 px-3 font-bold text-2xl text-blue-800">Understand The Painting Process
            </h1>
            <button type="button"
                class="absolute trackbtn top-[200px] right-[20px] bg-blue-600 h-[10vh] w-[20vh] font-bold text-white">Read
                More</button>
        </div> --}}
        </div>
    </div>
@endsection
