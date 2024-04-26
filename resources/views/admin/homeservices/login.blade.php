<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Login</title>
    <link rel="stylesheet" href="servicesstyle.css">


</head>

<body>
    <div class="flex flex-col justify-center items-center py-[60px] ">
        <div class="login h-[82vh] w-[70vh] bg-blue-100 border rounded-3xl">

            <div class="admin flex flex-col items-center pt-10">
                <img src="{{ asset('homeimages/cleaning1.jpg') }}" class="h-[30vh] w-[30vw] border border-blue-600 border-x-4">
            </div>

            <div class="text-center text-xl font-bold pt-5">
                Admin Login

            </div>

            <form action="{{route('login')}}" method="POST" class="form gap-5 pt-5 flex flex-col items-center">
                @csrf
                <input type="text" name="email" id="input" placeholder="Username"
                    class="border border-black rounded-full text-[18px] text-center focus:outline-none w-[25vw]">
                <input type="text" name="password" id="input" placeholder="Password"
                    class="border border-black rounded-full text-[18px] text-center focus:outline-none w-[25vw]">
                <button type="submit"
                    class="bg-blue-800 text-white border rounded-full h-9 w-[100px]">Login</button>
            </form>

        </div>
    </div>
</body>

</html>
