<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Content</title>
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
    <div class="content p-5">

        <div class=""> {{ $blog->content }}
            {{-- <h1 class="font-bold text-[40px]">Total Home Services: Professional House Cleaning Service</h1>
                <p class="pt-5">At Total Home Services, we understand that your home is your sanctuary, and
                    maintaining
                    its cleanliness is
                    essential for your comfort and well-being. That's why we offer top-notch professional house cleaning
                    services tailored to meet your specific needs.</p>
                <h2 class="font-bold text-[20px] pt-5">Our Services Include:</h2>
                <p class="pt-5">Thorough Cleaning: Our experienced team meticulously cleans every corner of your home,
                    from ceiling to floor.
                    We pay attention to detail to ensure no spot is overlooked.

                    Customized Cleaning Plans: We recognize that every home is unique, which is why we work with you to
                    create a
                    customized cleaning plan that fits your schedule and requirements.

                    Flexible Scheduling: Whether you need a one-time deep clean, weekly, bi-weekly, or monthly
                    maintenance,
                    we've got you covered. Our flexible scheduling ensures that your cleaning needs are met on your
                    terms.

                    Environmentally Friendly Products: We care about your health and the environment. That's why we use
                    eco-friendly cleaning products that are safe for your family, pets, and the planet.

                    Trained and Trustworthy Staff: Our cleaning professionals undergo rigorous training and background
                    checks to
                    ensure they deliver the highest standards of service. You can trust our team to treat your home with
                    respect
                    and care.

                    Satisfaction Guaranteed: Your satisfaction is our top priority. If you're not completely satisfied
                    with
                    our
                    service, we'll re-clean the areas in question at no extra cost.

                    Why Choose Sparkle Cleaners:

                    Experience: With years of experience in the industry, we have perfected our cleaning techniques to
                    deliver
                    exceptional results.
                    Reliability: You can count on us to arrive on time and complete the job efficiently, leaving your
                    home
                    sparkling clean.
                    Affordability: We offer competitive rates without compromising on quality. Our transparent pricing
                    ensures
                    no hidden fees.
                    Let Us Take the Stress Out of Cleaning:

                    Sit back, relax, and let Sparkle Cleaners handle the dirty work. Whether you're a busy professional,
                    a
                    parent juggling multiple responsibilities, or simply want to reclaim your weekends, we're here to
                    help.
                    Experience the joy of coming home to a clean and refreshed space with Sparkle Cleaners.</p>
            </div> --}}

        </div>

</body>

</html>
