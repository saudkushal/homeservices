<div class="sidebar text-xl font-bold text-white bg-blue-800 h-screen">
    <div class="cleaningimg py-10 px-10">
        <img src="{{ asset('homeimages/cleaning1.jpg') }}" class="w-32">
    </div>

    <ul class=" font-bold flex flex-col items-start gap-10 px-10">

        <li class="{{request()->segment(2)=="services"?"text-black":""}}"> <a href="{{ route('services.index') }}">Home</a></li>
        {{-- <li> <a href="{{ route('') }}">About Us</a></li> --}}
        <li class="{{request()->segment(2)=="slink"?"text-black":""}}"> <a href="{{ route('slink.index') }}">Services</a></li>
        <li class="{{request()->segment(2)=="review"?"text-black":""}}"> <a href="{{ route('review.index') }}">Reviews</a></li>
        <li class="{{request()->segment(2)=="blog"?"text-black":""}}"> <a href="{{ route('blog.index') }}">Blog</a></li>
        <li class="{{request()->segment(2)=="ccc"?"text-black":""}}"> <a href="{{ route('ccc.index') }}">Contact</a></li>
    </ul>
</div>

