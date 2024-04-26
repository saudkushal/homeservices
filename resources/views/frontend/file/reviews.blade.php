@extends('frontend.layout.main')
@section('main')
    <div class="herosection relative flex h-[70vh]">
        <img src="{{ asset('homeimages/rrr.jpg') }}" class="hero h-full w-full object-cover">
        <div class="hero2 absolute h-full w-full bg-black bg-opacity-30 flex flex-col justify-center items-center">
            <span class="text-5xl font-bold text-white text-center">Reviews</span>

        </div>
    </div>
    <div class="customerreviews">
        <div class="pt-20 px-20">
            <div class="relative grid grid-cols-3 gap-10 bg-blue-900 px-10 py-10 border rounded-lg max-sm:grid-cols-1">
                <div
                    class="icon1 absolute h-[110px] w-[110px] rounded-full bg-blue-500 text-white flex  justify-center items-center -top-[50px] left-10 max-sm:-top-[70px] ">
                    <span class="material-symbols-outlined text-white text-[70px]">
                        reviews
                    </span>

                </div>
                <div class="flex flex-col justify-center ">
                    <h1 class="font-bold text-white text-3xl">What Our
                        Customer Say?</h1>
                    <p class="text-white text-xl pt-10">We are glad to get reviews of our customers. Our customers
                        satisfaction is our goal.</p>
                    <div class="pt-10">
                        <a href="{{ route('review/create') }}"
                            class="btn btn-primary px-5 border border-black w-[10vw] rounded-md bg-blue-600 h-9 text-center text-white py-1.5 font-bold">+
                            Add Review</a>
                    </div>

                </div>
                <div class="col-span-2">
                    <section class="relative z-10">
                        <div class="h-[70vh] w-full">
                            <div class="owl-carousel owl-theme">


                                @foreach ($reviews as $key => $review)
                                    <div class="item relative mx-2  border bg-white">

                                        <div class="h-[50%] w-full object-cover"
                                            style="background: url({{ asset('/uploads/' . $review->photo) }}) no-repeat center center / cover; background-color: transparent;">
                                        </div>

                                        <div class="p-2">
                                            {{ $review->review }}
                                        </div>
                                        <div class="flex justify-between p-2 pt-5">
                                            <div class="font-bold">
                                                {{ $review->customername }}
                                            </div>

                                            <div class="">
                                                @for ($i = 0; $i < $review->rating; $i++)
                                                    <span class="material-symbols-outlined text-yellow-600">
                                                        star
                                                    </span>
                                                @endfor
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                                {{-- <div class="item relative mx-2 border bg-white">
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[260px] pt-[375px] max-sm:pt-[400px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[280px] pt-[375px]  max-sm:pt-[400px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[300px] pt-[375px] max-sm:pl-[240px]  max-sm:pt-[400px]">
                                    grade
                                </span>

                                <div class="h-[50%] w-full object-cover"
                                    style="background: url('./homeimages/r2.avif') no-repeat center center / cover; background-color: transparent;">
                                </div>
                                <h1 class="pt-5 p-2">I called for the gardening professional fron Total Home
                                    Services. The service provider was well behaved and skilled. I am really
                                    satisfied with his work.</h1>
                                <h2 class="pt-[37px] font-bold p-2">Riya Poudel</h2>

                            </div>

                            <div class="item relative mx-2 border bg-white">
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[220px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[240px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[260px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[280px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[300px] pt-[375px] max-sm:pl-[200px]">
                                    grade
                                </span>
                                <div class="h-[50%] w-full object-cover"
                                    style="background: url('./homeimages/r5.avif') no-repeat center center / cover; background-color: transparent;">
                                </div>
                                <h1 class="pt-5 p-2">I called for the painting services from Total Home Services. I
                                    am really satisfied with his work.</h1>
                                <h2 class="pt-[60px] font-bold p-2">Srijan Poudel</h2>


                            </div>
                            <div class="item relative mx-2 border bg-white">
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[240px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[260px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[280px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[300px] pt-[375px] max-sm:pl-[220px]">
                                    grade
                                </span>
                                <div class="h-[50%] w-full object-cover"
                                    style="background: url('./homeimages/r6.jpg') no-repeat center center / cover; background-color: transparent;">
                                </div>
                                <h1 class="pt-5 p-2">I called for the painting services from Total Home Services. I
                                    am really satisfied with his work.</h1>
                                <h2 class="pt-[60px] font-bold p-2">Abhinab Gautam</h2>


                            </div>

                            <div class="item relative mx-2 border bg-white">
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[260px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[280px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[300px] pt-[375px] max-sm:pl-[240px]">
                                    grade
                                </span>
                                <div class="h-[50%] w-full object-cover"
                                    style="background: url('./homeimages/r7.avif') no-repeat center center / cover; background-color: transparent;">
                                </div>
                                <h1 class="pt-5 p-2">I called for the painting services from Total Home Services. I
                                    am really satisfied with his work.</h1>
                                <h2 class="pt-[60px] font-bold p-2">Ankit KC</h2>


                            </div>

                            <div class="item relative mx-2 border bg-white">
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[260px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[280px] pt-[375px]">
                                    grade
                                </span>
                                <span
                                    class="material-symbols-outlined block absolute text-yellow-600 pl-[300px] pt-[375px] max-sm:pl-[240px]">
                                    grade
                                </span>
                                <div class="h-[50%] w-full object-cover"
                                    style="background: url('./homeimages/r8.avif') no-repeat center center / cover; background-color: transparent;">
                                </div>
                                <h1 class="pt-5 p-2">I called for the painting services from Total Home Services. I
                                    am really satisfied with his work.</h1>
                                <h2 class="pt-[60px] font-bold p-2">Samridhi Basnet</h2>


                            </div> --}}
                            </div>

                        </div>
                    </section>



                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="path/to/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 5,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            dots: true,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 2
                }
            }
        });
    });
</script>
