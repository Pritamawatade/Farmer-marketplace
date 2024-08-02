<!-- A web design for Farmkart showcasing innovative solutions for Indian farmers with modern technologies. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmkart-home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>

    <style>
        h1 {
            font-family: "Noto Serif", serif;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="w-full overflow-x-hidden">

    <div id="header"></div>

    <div class="herosection flex flex-col sm:flex-row items-center justify-around mt-20">
        <div class="herocontent text-center sm:text-left">
            <h1 class="md:text-7xl text-3xl sm:text-4xl">NO <span class="text-green-700 underline">#1</span> CHOICE OF <br> INDIAN FARMERS</h1>
        </div>
        <div class="heroimg mt-8 sm:mt-0">
            <img class="h-64 sm:h-80 md:h-96 mb-5 rounded transform transition duration-500 hover:scale-110 shadow-lg hover:shadow-2xl object-contain" src="https://farmkartgroup.com/wp-content/uploads/2024/02/Cultivating-innovation-acre-by-acre-01-1536x1024.jpg" alt="Hero image">
        </div>
    </div>

    <div class="hero2 p-10 sm:p-20 flex flex-col sm:flex-row items-center gap-10 sm:gap-40 justify-around bg-gradient-to-r from-sky-500 to-green-500">
        <div class="hero2text text-center sm:text-left">
            <h2 class="bg-green-600 p-4 rounded text-2xl sm:text-3xl font-bold capitalize">Transforming farming with<br>technological innovation</h2>
            <h4 class="mt-4 font-medium">We design innovative solutions to transform traditional agricultural methods. We’re advancing one of the world’s oldest professions, bringing it into the 21st century and taking it beyond.</h4>
        </div>
        <div class="img2 mt-8 sm:mt-0">
            <img class="h-64 sm:h-80 md:h-96 w-auto transform transition duration-500 hover:scale-110 shadow-lg hover:shadow-2xl" src="https://farmkartgroup.com/wp-content/uploads/2020/11/digital-farmkart.png" alt="Tech image">
        </div>
    </div>

    <div class="hero3 p-10 sm:p-20 flex flex-col sm:flex-row items-center gap-10 sm:gap-40 justify-around bg-cyan-700">
        <div class="img3 mt-8 sm:mt-0">
            <img class="h-64 sm:h-80 md:h-96 transform transition duration-500 hover:scale-110 shadow-lg hover:shadow-2xl" src="https://farmkartgroup.com/wp-content/uploads/2021/03/reinventing-agriculture-2.jpg" alt="Tech image">
        </div>
        <div class="hero3text text-center sm:text-left">
            <h2 class="bg-green-600 p-4 rounded text-2xl sm:text-3xl font-bold capitalize">Reinventing agriculture<br>for A better tomorrow</h2>
            <h4 class="mt-4 font-medium">At Farmkart, we want to drive innovation, make an impact, and become an inspiration. We are improving the daily lives of farmers in India, allowing them to be more productive, efficient, and progressive.</h4>
        </div>
    </div>

    <div class="hero4 p-10 sm:p-20 flex flex-col sm:flex-row items-center gap-10 sm:gap-40 justify-around bg-cyan-700">
        <div class="hero4text text-center sm:text-left">
            <h2 class="bg-sky-600 p-4 rounded text-2xl sm:text-3xl font-bold capitalize">Designing A smarter future of farming</h2>
            <h4 class="mt-4 font-medium">We’re paving the way for a better farming experience in India by democratizing access to modern agricultural inputs. We want to provide every farmer in the country with leading products and game-changing pioneering technologies.</h4>
        </div>
        <div class="img4 mt-8 sm:mt-0">
            <img class="h-60 w-60 sm:w-80 transform transition duration-500 hover:scale-110 shadow-lg hover:shadow-2xl" src="https://farmkartgroup.com/wp-content/uploads/2020/12/Agrinidan-1024x652.png" alt="Tech image">
        </div>
    </div>

    <div class="about p-10 sm:p-20">
        <h1 class="text-center text-3xl sm:text-4xl capitalize mb-10">What do we offer?</h1>

        <div class="hero5 flex flex-col sm:flex-row items-center justify-center gap-10">
            <img class="h-64 sm:h-80 md:h-96 w-96 rounded" src="https://farmkartgroup.com/wp-content/uploads/2020/08/farmkart-superstore-1024x514.png" alt="Farmkart">
            <div class="hero5text text-center sm:text-left mt-4 sm:mt-0">
                <h2 class="font-medium text-2xl sm:text-3xl">E-Commerce platform</h2>
                <br>
                <h3 class="text-xl text-gray-600">A comprehensive one-stop online shopping platform for agriculture products and services built especially for farmers in rural India, offering superior customer experience.</h3>
            </div>
        </div>
    </div>

    <div id="footer"></div>

    <script>
        $(document).ready(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });

        gsap.registerPlugin(ScrollTrigger);

        gsap.from('.heroimg', { x: 150, duration: 1 });
        gsap.from('.herocontent', { x: -150, duration: 1 });

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
