<div class="secondpart p-4">
    <div class="navbar flex justify-end items-end">

        <div class="2div ">
            <div class="flex">
                <span class="material-symbols-outlined text-3xl">
                    sms
                </span>
                <span class="material-symbols-outlined text-3xl">
                    notifications
                </span>
                <div class="logout cursor-pointer" id="show">

                    <span class="material-symbols-outlined text-3xl">
                        account_circle
                    </span>

                </div>
                <div class="hidden bg-black font-bold text-black w-[10vw]  " id="aa">
                    <form action="{{ route('authlogout') }}" method="POST" >
                        @csrf
                        <button type="submit" class="searchbtn text-white rounded-full">
                            <div class="flex px-2">
                                <span class="material-symbols-outlined text-2xl">
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
