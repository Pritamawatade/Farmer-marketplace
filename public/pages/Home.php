<!-- A web design for Farmkart showcasing innovative solutions for Indian farmers with modern technologies. -->
<!DOCTYPE html >
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmkart-home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>

    <style>

     
        h1 {
            font-family: "Noto Serif", serif;
        }

     
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="min-h-full overflow-x-hidden w-screen">


    <?php 
    include 'header.html';
    ?>
   
    <div class="herosection  sm:flex items-center justify-around  ">
        <div class="herocontent text-center align-center">
            <h1 class="md:text-7xl sm:text-2xl text-2xl">NO <span class="text-green-700 underline">#1</span> CHOICE OF <br> INDIAN FARMERS </h1>
        </div>
        <div class="heroimg ">
            <img class="h-96 mb-5 rounded transform transition duration-500 hover:scale-110 shadow:lg hover:shadow-2xl object-contain img1  hover:ease-in-out  "
                src="https://farmkartgroup.com/wp-content/uploads/2024/02/Cultivating-innovation-acre-by-acre-01-1536x1024.jpg"
                alt="Hero image">
        </div>
    </div>

    <div class="hero2 p-20  sm:flex items-center  gap-40 justify-around bg-gradient-to-r from-sky-500  to-green-500 ">
        <div class="hero2text">
            <h2 class="bg-green-600 pb-2 rounded text-3xl text-center font-bold capitalize ">Transforming farming with
                <br> technological innovation
            </h2>
            <h4 class="font-medium">We design innovative solutions to transform traditional <br> agricultural methods.
                We’re advancing one of the world’s <br> oldest professions, bringing it into <br> the 21st century and
                taking it beyond.</h4>
        </div>
        <div class="img2">
            <img class=" h-96 w-auto transform transition duration-500 hover:scale-110 shadow:lg hover:shadow-2xl"
                src="https://farmkartgroup.com/wp-content/uploads/2020/11/digital-farmkart.png" alt="Tech image">
        </div>
    </div>

    <div class="hero3 p-20  sm:flex items-center  gap-40 justify-around bg-cyan-700">
        <div class="img3">
            <img class="h-96 transform transition duration-500 hover:scale-110 shadow:lg hover:shadow-2xl"
                src="https://farmkartgroup.com/wp-content/uploads/2021/03/reinventing-agriculture-2.jpg"
                alt="Tech image">
        </div>
        <div class="hero3text  ">
            <h2 class="bg-green-600 pb-2 rounded text-3xl text-center font-bold capitalize ">
                Reinventing agriculture <br>
                for A better tomorrow</h2>
            <h4 class="text-black-700 font-2xl font-medium ">At Farmkart, we want to drive innovation, make <br> an
                impact and become an inspiration. We are improving the <br> daily lives of farmers in India, allowing
                <br> them to be more productive, efficient, and progressive.
            </h4>
        </div>
    </div>
    <div class="hero4 p-20  sm:flex items-center  gap-40 justify-around bg-cyan-700">
        <div class="hero4text h4text">
            <h1 class="font-bold text-2xl bg-sky-600">Designing A smarter future of farming</h1>
            <h4 class="text-black-700 font-2xl font-medium ">We’re paving the way for a better farming experience <br> in India by
                democratizing access to modern <br> agricultural inputs. We want to provide <br> every farmer in the
                country <br>with leading products and <br>game-changing pioneering technologies.</h4>
        </div>
        <div class="img4">
            <img class="transform transition duration-500 hover:scale-110 shadow:lg hover:shadow-2xl h-60  w-96"
                src="https://farmkartgroup.com/wp-content/uploads/2020/12/Agrinidan-1024x652.png" alt="Tech image">
        </div>
    </div>

    <div class="about">
        <h1 class="text-center capitalize">What do we offer ?</h1>

        <div class="hero5  sm:flex align-center justify-center">
            <img class="h-96 w-96"
                src="https://farmkartgroup.com/wp-content/uploads/2020/08/farmkart-superstore-1024x514.png"
                alt="Farmkart">

            <div class="hero5text text-center  mt-4 ">
                <h2 class="font-medium text-3xl ">E-Commerce platform</h2>
                <br>
                <h3 class="text-xl text-gray-600">
                    A comprehensive one-stop online <br>shopping platform for agriculture <br> products and services
                    built especially for <br>farmers in rural India, offering <br>superior customer experience.
                </h3>
            </div>

        </div>
    </div>

    
    <?php 
    include 'footer.html';
    ?>


    <script>
        gsap.from('.heroimg', { x: 150, duration: 1 });
        gsap.from('.herocontent', { x: -150, duration: 1 });
        // gsap.from('.img2', { x: -150, duration: 1 });
        // gsap.from('.hero2text', { x: 150, duration: 1 });

        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".img2", {
            x: -150,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: ".img2",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });

        gsap.from(".hero2text", {
            x: 150,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: ".hero2text",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });
        gsap.from(".img3", {
            x: -150,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: ".img3",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });

        gsap.from(".hero3text", {
            x: 150,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: ".hero3text",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });
        gsap.from(".img4", {
            x: -150,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: ".img4",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });

        gsap.from(".hero4text", {
            x: 150,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: ".hero4text",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });


    </script>
</body>

</html>