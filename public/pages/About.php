<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .herosection {
            position: relative;
            text-align: center;
            color: rgb(255, 255, 255);
        }
        #heading{
            position: absolute;
            text-transform: uppercase;
            font-family: 'Bebas Neue';
            clip-path: polygon( 0, 100% 0, 100% 100%, 0% 100%);
            line-height: 5.9rem;
            font-weight: bolder;

            text-shadow: 7px 5px 3px rgba(0, 0, 0, 0.733); /* Dark shadow */
            background-color: rgba(11, 253, 108, 0.875); /* Black background with 50% opacity */
    padding: 10px;
    border-radius: 5px;

        }
        .char {

            transform: translateY (115px);
            transition: transform .55;
        }

        .img1 {
            height: 500px;
            width: 607px;
            border: 0.2px solid white;
            border-radius: 80px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body class="bg-white">


<?php 
    include 'header.html';
    ?>
    <div class="aboutuspage">

        <div class="herosection flex items-center justify-around  ">
                <img class="object-cover h-screen w-screen" src="download.png" alt="">
                <h1 id="heading" class=" text md:text-7xl text-xl sm:text-4xl">We help to give farmer freedom</h1>
        </div>

        <div class="hero2 p-20 md:flex items-center  gap-40 justify-around bg-gradient-to-r from-sky-500  to-green-500 ">
            <div class="hero2text mt-3">
                <h2 class="bg-green-600 pb-2 rounded text-3xl text-center font-bold capitalize ">Transforming farming
                    with
                      technological innovation
                </h2>
                <h4 class="font-medium">We design innovative solutions to transform traditional   agricultural
                    methods.
                    We’re advancing one of the world’s   oldest professions, bringing it into   the 21st century
                    and
                    taking it beyond.</h4>
            </div>
            <div class="img2 mt-3">
                <img class="transform transition duration-500 hover:scale-110 shadow:lg hover:shadow-2xl"
                    src="https://farmkartgroup.com/wp-content/uploads/2020/11/digital-farmkart.png" alt="Tech image">
            </div>
        </div>

        <div class="hero3 p-20 md:flex items-center  gap-40 justify-around bg-cyan-700">
            <div class="img3 mt-3">
                <img class="transform transition duration-500 hover:scale-110 shadow:lg hover:shadow-2xl "
                    src="https://farmkartgroup.com/wp-content/uploads/2021/03/reinventing-agriculture-2.jpg"
                    alt="Tech image">
            </div>
            <div class="hero3text  mt-3">
                <h2 class="bg-green-600 pb-2 rounded text-3xl text-center font-bold capitalize ">
                    Reinventing agriculture  
                    for A better tomorrow</h2>
                <h4 class="text-black-700 font-2xl font-medium ">At Farmkart, we want to drive innovation, make   an
                    impact and become an inspiration. We are improving the   daily lives of farmers in India,
                    allowing
                      them to be more productive, efficient, and progressive.
                </h4>
            </div>
        </div>
        <div class="hero4 p-20 md:flex items-center  gap-40 justify-around bg-cyan-700">
            <div class="hero4text mt-3">
                <h1>Designing A smarter future of farming</h1>
                <h4 class="font-2xl ">We’re paving the way for a better farming experience   in India by
                    democratizing access to modern   agricultural inputs. We want to provide   every farmer in the
                    country  with leading products and  game-changing pioneering technologies.</h4>
            </div>
            <div class="img4 mt-3">
                <img class="transform transition duration-500 hover:scale-110 shadow:lg hover:shadow-2xl h-60  w-96"
                    src="https://farmkartgroup.com/wp-content/uploads/2020/12/Agrinidan-1024x652.png" alt="Tech image">
            </div>
        </div>

        <div class="about">
            <h1 class="text-center capitalize">What do we offer ?</h1>

            <div class="hero5 md:flex align-center justify-center">
                <img class="h-96 w-96 mt-3"
                    src="https://farmkartgroup.com/wp-content/uploads/2020/08/farmkart-superstore-1024x514.png"
                    alt="Farmkart">

                <div class="hero5text text-center  mt-4 ">
                    <h2 class="font-medium text-3xl ">E-Commerce platform</h2>
                     
                    <h3 class="text-xl text-gray-600">
                        A comprehensive one-stop online  shopping platform for agriculture   products and services
                        built especially for  farmers in rural India, offering  superior customer experience.
                    </h3>
                </div>

            </div>
        </div>

    </div>

    <?php 
    include 'footer.html';
    ?>

<script>
    const split = new SplitType(".text");

    gsap.set(split.chars, {
        transformOrigin: "center center",
        y: 100,
        opacity: 0
    });

    gsap.to(split.chars, {
        y: 0,
        opacity: 1,
        stagger: 0.1,
        duration: 1,
        ease: "power2.out",
        repeat: 0
    });
</script>


</body>
</body>

</html>