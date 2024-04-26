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
    <link rel="stylesheet" href="servicesstyle.css">

</head>

<body>
    <div class="dashboard py-20 flex flex-col justify-center items-center">
        <div class="form items-center w-[70vw] bg-blue-100 shadow-md">
            <h1 class="font-bold text-black text-3xl text-center">Add New Service</h1>

            <form action="{{ route('slink.store') }}" method="POST"
                class="input pt-10 p-10 gap-10 flex flex-col items-left">
                @csrf

                <input type="text" name="logo" id="input" placeholder="Input Your Logo"
                    class="border border-black text-[18px] text-left bg-white focus:outline-none w-[40vw]">
                @if ($errors->has('logo'))
                    <div class="error">{{ $errors->first('logo') }}</div>
                @endif

                <input type="text" name="heading" id="input" placeholder="Service Name"
                    class="border border-black text-[20px] text-left bg-white focus:outline-none w-[40vw]">
                @if ($errors->has('heading'))
                    <div class="error">{{ $errors->first('heading') }}</div>
                @endif


                <textarea id="description" placeholder="Provide description" name="description" rows="4"
                    class="border border-black w-[63%] text-[20px] text-left bg-white focus:outline-none"></textarea>
                @if ($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                @endif




                <button type="submit" class="bg-blue-800 text-white border h-9 w-[100px]">Submit</button>

            </form>
        </div>
    </div>




</body>

</html>
