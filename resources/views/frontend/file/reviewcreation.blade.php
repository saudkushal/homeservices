<html>

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
    <title>Reviews</title>
    <link rel="stylesheet" href="servicesstyle.css">
</head>

<body>
    <div class="dashboard py-20 flex flex-col justify-center items-center">
        <div class="form items-center w-[70vw] bg-blue-100 shadow-md">
            <h1 class="font-bold text-black text-3xl text-center">Provide Feedback On Our Services</h1>

            <form action="{{ route('reviewstore') }}" method="POST" enctype="multipart/form-data"
                class="input pt-10 p-10 gap-10 flex flex-col items-left">
                @csrf
                <input type="text" name="customername" id="input" placeholder="Your name"
                    class="border border-black text-[20px] text-left bg-white focus:outline-none w-[40vw]">
                @if ($errors->has('customername'))
                    <div class="error">{{ $errors->first('customername') }}</div>
                @endif



                <input type="text" name="review" id="input" placeholder="Review our service"
                    class="border border-black text-[20px] text-left bg-white focus:outline-none w-[40vw]">
                @if ($errors->has('review'))
                    <div class="error">{{ $errors->first('review') }}</div>
                @endif



                <div class="rating ">
                    <input type="hidden" name="rating" id="rating_input" value="0">
                    <label for="star5" title="5 stars">5 stars</label>

                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star4" title="4 stars">4 stars</label>

                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star3" title="3 stars">3 stars</label>

                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star2" title="2 stars">2 stars</label>

                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star1" title="1 star">1 star</label>

                    <input type="radio" id="star1" name="rating" value="1">
                </div>
                @if ($errors->has('rating'))
                    <div class="error">{{ $errors->first('rating') }}</div>
                @endif


                <input type="file" name="photo" id="input" placeholder="Provide your picture"
                    class="border border-black text-[18px] text-left bg-white focus:outline-none w-[40vw]">
                @if ($errors->has('photo'))
                    <div class="error">{{ $errors->first('photo') }}</div>
                @endif




                <button type="submit" class="bg-blue-800 text-white border h-9 w-[100px]">Submit</button>

            </form>
        </div>
    </div>
</body>

</html>
