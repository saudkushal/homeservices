<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    // colors: {
                    //     primary: '#00783b',
                    //     secondary: '#f07516',
                    // }
                    colors: {
                        primary: '#ff1a1a',
                        secondary: '#3939ac',
                    }
                },
                screens: {
                    'xs': '320px',
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                    '1299px': '1299px',
                },
            }
        }
    </script>
    <link rel="stylesheet" href="servicesstyle.css">
    <script>
        const toggleNav = () => {
            const navbar = document.getElementById('navbar')
            navbar.classList.toggle('!block')
        }
    </script>
</head>

<body>

    <div class="navigationbar bg-white sticky top-0 z-20">
        <div class="header h-10 bg-black gap-10 text-right flex justify-end">
            <div class="span1 flex items-center">
                <span class="material-symbols-outlined text-blue-600">
                    call
                </span>
                <span class="s1 text-white">(+977)9878541234</span>

            </div>
            <div class="span2 flex items-center">
                <span class="material-symbols-outlined text-blue-600">
                    mail
                </span>
                <span class="s1 text-white ">totalhomeservices@gmail.com</span>
            </div>
            <div class="pr-2 flex">
                <div class="logout cursor-pointer" id="show">

                    <span class="material-symbols-outlined text-blue-600 text-3xl">
                        account_circle
                    </span>

                </div>
                <div class="hidden bg-black font-bold text-blue-600 w-[8vw]  " id="aa">
                    <form action="{{ route('ulogout') }}" method="POST">
                        @csrf
                        <button type="submit" class="searchbtn rounded-full">
                            <div class="flex py-1">
                                <span class="material-symbols-outlined  text-2xl">
                                    Logout
                                </span>
                                <span class="px-2 py-1">
                                    Logout
                                </span>
                            </div>
                        </button>
                    </form>


                </div>
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
            </div>



        </div>
        <div class="navigation flex justify-between items-center">
            <div class="cleaningimg">
                <img src="{{ asset('homeimages/cleaning1.jpg') }}" class="w-32">
            </div>
            <div class="link max-[1070px]:hidden">
                <ul class=" font-bold flex gap-10">

                    <li> <a href="{{ route('display') }}">Home</a></li>
                    <li> <a href="{{ route('about') }}">About Us</a></li>
                    <li> <a href="{{ route('services') }}">Services</a></li>
                    <li> <a href="{{ route('reviews') }}">Reviews</a></li>
                    <li> <a href="{{ route('blog') }}">Blog</a></li>
                    <li> <a href="{{ route('contact') }}">Contact</a></li>
                </ul>

            </div>

            <div class="search relative flex items-center gap-5">
                <button type="button" onclick="toggleNav()">
                    <span class="material-symbols-outlined text-3xl text-black min-[1070px]:hidden ">
                        menu
                    </span>
                </button>


                <div class="search relative">
                    <form action="{{ route('search') }}">
                        <input type="text" name="servicename" id="search" placeholder="Search"
                            class="inputbox border border-black rounded-full h-9">

                        <button type="submit"
                            class="searchbtn absolute top-0 right-0 bg-black px-3 h-9 text-white rounded-full"><span
                                class="material-symbols-outlined">
                                search
                            </span></button>
                    </form>


                </div>


            </div>
            <div class="absolute z-10 top-[40px] left-0 h-[60vh] bg-blue-600 p-10 hidden" id="navbar">
                <div class="menulinks flex flex-col text-white font-bold  gap-y-5">
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Services</a>
                    <a href="#">Reviews</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </div>





    <div class="herosection mt-5 relative flex h-[70vh]">
        <img src="./homeimages/hero.jpg" class="hero h-full w-full object-cover">
        <div class="hero2 absolute h-full w-full bg-black bg-opacity-50 flex flex-col justify-center items-center">
            <span class="text-5xl font-bold text-white text-center">Home Repair & Maintainance Services in
                Kathmandu,Nepal</span>

        </div>
    </div>


    <!--our services-->
    <div class="pt-20 font-bold text-black text-5xl text-center max-sm:text-3xl">
        <span>-----We Provide Professional Services-----</span>

    </div>



    <section class="relative globalpadding pt-10 z-10">
        <div class="h-[70vh]">
            <div class="owl-carousel owl-theme ">

                @foreach ($services as $key => $service)
                    <a href="{{ route('imginfo', $service->id) }}" class="item relative">
                        <img class="h-[70vh] w-full object-cover " alt="img"
                            src="{{ asset('/uploads/' . $service->serviceimage) }}" />
                        <div
                            class="absolute px-2 top-0 left-0 font-bold text-3xl text-white text-center w-full h-full bg-black bg-opacity-30 flex flex-col justify-center items-center">
                            {{ $service->servicename }}
                        </div>
                        {{-- <div class="h-full w-full object-cover"
                            style="background: url({{ asset('/uploads/' . $service->serviceimage) }}) no-repeat center center / cover; background-color: transparent;">
                        </div> --}}


                    </a>
                @endforeach





            </div>

        </div>
    </section>





    <!-- q&a -->
    <div class="pt-20">
        <div class="questionanswer relative flex h-[80vh]">
            <img src="./homeimages/question.jpg" class="w-full h-full object-cover">
            <div class="absolute h-full w-full bg-black bg-opacity-50 flex flex-col justify-center items-center">
                <h1 class="font-bold text-5xl text-white">Have any questions?</h1>
                <p class="text-2xl text-white">Feel free to ask</p>
                <form action="{{ route('custthought.store') }}" method="POST"
                    class="inputbox relative w-9/12 py-4 px-4 bg-white  mt-10">
                    @csrf
                    <input type="text" name="customerthought" id="input"
                        placeholder="Please share your thoughts"
                        class=" w-full h-full text-[18px] text-left focus:outline-none outline-none border-0">
                    <button type="submit"
                        class="absolute trackbtn top-0 right-0 bg-black h-full text-white px-10">Submit</button>
                </form>

            </div>

        </div>
    </div>
    <div class="importance globalpadding pt-20 flex flex-col justify-center items-center">
        <h1 class="ws font-bold text-3xl text-black">Why Us?</h1>
        <div class="reasons pt-10">
            <div class="grid grid-cols-3 gap-10 max-[600px]:grid-cols-1 ">
                <div class="r1 p-4 shadow-md flex flex-col items-center text-center bg-blue-200">
                    <div
                        class="icon1 h-[50px] w-[50px] rounded-full bg-blue-600 text-white flex  justify-center items-center ">
                        <span class="material-symbols-outlined">
                            schedule
                        </span>

                    </div>

                    <h1 class="heading pt-3 font-bold text-xl">Prompt and Reliable</h1>
                    <p class="paragraph pt-2">We are renowned for Prompt and Reliable service to ensure minimal
                        downtime.</p>

                </div>
                <div class="r1 p-4 shadow-md flex flex-col items-center text-center bg-blue-200">
                    <div
                        class="icon1 h-[50px] w-[50px] rounded-full text-white bg-blue-600 flex  justify-center items-center ">
                        <span class="material-symbols-outlined">
                            handyman
                        </span>

                    </div>

                    <h1 class="heading pt-3 font-bold text-xl">Quality Workmanship</h1>
                    <p class="paragraph pt-2">We take pride in delivering top-notch workmanship and ensuring
                        that
                        all
                        installations and repairs are carried out to the highest standards.</p>

                </div>
                <div class="r1 p-4 shadow-md flex flex-col items-center text-center bg-blue-200">
                    <div
                        class="icon1 h-[50px] w-[50px] rounded-full bg-blue-600 text-white flex  justify-center items-center ">
                        <span class="material-symbols-outlined">
                            credit_card
                        </span>

                    </div>

                    <h1 class="heading pt-3 font-bold text-xl">Competitive Pricing</h1>
                    <p class="paragraph pt-2">We offer competitive pricing for our services, providing excellent
                        value
                        for money without compromising on quality.</p>

                </div>
            </div>

        </div>
    </div>

    <div class="footer pt-20">


        <div class="bg-black">
            <div class="p-10 grid grid-cols-3 items-center max-[600px]:grid-cols-1 max-[600px]:gap-10 max-sm:pl-5">
                <div class="d1">
                    <img src="{{ asset('homeimages/cleaning1.jpg') }}"
                        class="w-40 pl-[30px] max-sm:pt-10 max-sm:pl-2">

                </div>

                <div class="flex">
                    <div class="d2 pr-1">
                        <span class="material-symbols-outlined text-blue-600 text-xl block pt-10">
                            location_on
                        </span>
                        <span class="material-symbols-outlined text-blue-600 text-xl block pt-2">
                            call
                        </span>
                        <span class="material-symbols-outlined text-blue-600 text-xl block pt-0.5 ">
                            mail
                        </span>
                    </div>
                    <div class="d3">

                        <span class="f1 block text-white font-bold uppercase -ml-5">Contact Info</span>
                        <span class="f1 block text-white pt-5">New Baneshwor Kathmandu, Nepal</span>
                        <span class="f1 block text-white pt-2">(+977)9845990348</span>
                        <span class="f1 block text-white pt-2">totalhomeservices@gmail.com</span>

                    </div>
                </div>


                <div class="d4">
                    <span class="f1 block text-white font-bold uppercase">Connect With Us</span>
                    <span class="f1 block text-white pt-5">Facebook</span>
                    <span class="f1 block text-white pt-2">Twitter</span>
                    <span class="f1 block text-white pt-2">Linkedin</span>


                </div>



            </div>

            <div class="">

                <p class="text-white text-center pt-20">Copyright © 2023 Total Home Services | Powered by Home Services
                </p>
            </div>
        </div>
    </div>


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
                margin: 10,
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
                        items: 3
                    }
                }
            });
        });
    </script>

</body>

</html>
