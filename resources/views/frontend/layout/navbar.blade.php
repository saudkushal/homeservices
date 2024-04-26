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
            <span class="s1 text-white">totalhomeservices@gmail.com</span>
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
        </div>






    </div>
    <div class="navigation flex justify-between items-center">
        <div class="cleaningimg">
            <img src="{{ asset('homeimages/cleaning1.jpg') }}" class="w-32">
        </div>
        <div class="link max-[1070px]:hidden">
            <ul class=" font-bold flex gap-20">

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
