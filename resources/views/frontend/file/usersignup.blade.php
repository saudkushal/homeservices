<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp Form</title>
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

</head>

<body>
    <div class="py-20">
        <div class="flex justify-center items-center">
            <h1 class="font-bold text-3xl">Sign-Up Form</h1>
        </div>
        <div class="flex justify-center items-center">
            <form action="{{ route('userlogin/store') }}" mrthod="POST">
                @csrf
                <div class="flex gap-10 max-sm:gap-0 max-sm:flex-col ">
                    <div class="firstname pt-10">
                        <input type="text" name="firstname" id="input" placeholder="First Name"
                            class="h-[8vh] w-[16.5vw] max-sm:w-[36vw] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none">
                    </div>


                    <div class="lastname pt-10 max-sm:pt-10">
                        <input type="text" name="lastname" id="input" placeholder="Last Name"
                            class="h-[8vh] w-[16.5vw] max-sm:w-[36vw] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none">
                    </div>

                </div>

                <div class="emailaddress pt-10">
                    <input type="text" name="email" id="input" placeholder="Email Address"
                        class="h-[8vh] w-[36vw] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none max-sm:w-[60vh]">
                </div>


                <div class="password pt-10">
                    <input type="text" name="password" id="input" placeholder="Password"
                        class="h-[8vh] w-[36vw] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none max-sm:w-[60vh]">
                </div>

                <div class="pt-10">
                    <button type="submit"
                        class=" top-0 right-0 bg-blue-600 px-[10vh] py-[10px] text-white border rounded-xl">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
