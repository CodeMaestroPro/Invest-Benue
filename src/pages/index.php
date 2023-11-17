<!DOCTYPE html>
<html lang="en">

<?php
require_once('components/header.php')

    ?>

<body class="">

    <?php
    require_once('components/navbar.php')

        ?>
    <!-- Hero Section  -->

    <section>
        <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-ride="carousel">
            <!--Carousel indicators-->
            <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
            </div>

            <!--Carousel items-->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']" id="carousel">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                    <img src="../../public/assets/images/img1.jpg" class="block w-full h-96" alt="..." id="cimg" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center md:block" id="caro-text">
                        <h2 class="text-3xl tracking-wider text-white font-semibold">Invest in Benue the Food Basket of
                            the
                            Nation</h2>
                    </div>
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <img src="../../public/assets/images/industrial-zone.jpg" class="block w-full h-96" alt="..."
                        id="cimg" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block"
                        id="caro-text">
                        <h5 class="text-3xl tracking-wider text-white font-semibold">Thinking Investment? Think Benue
                            State!
                        </h5>
                    </div>
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <img src="../../public/assets/images/investment-returns.jpg" class="block w-full h-96" alt="..."
                        id="cimg" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block"
                        id="caro-text">
                        <h5 class="text-3xl tracking-wider text-white font-semibold">Make Benue Your Investments
                            Destination Hub</h5>

                    </div>
                </div>
            </div>


            <!--Carousel controls - prev item-->
            <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
            </button>
            <!--Carousel controls - next item-->
            <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
            </button>
        </div>
    </section>

    <!-- End of Hero Section  -->

    <!-- <h1 class="text-4xl font-mono text-white-600 tracking-wide leading-tight mb-6 mt-4 text-center">
        WHY BENUE
    </h1> -->
    <section class="mb-20">
        <!-- Jumbotron -->
        <div class="bg-neutral-100 px-6 py-12 text-center dark:bg-neutral-900 md:px-12 lg:text-left">
            <div class="w-full mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
                <div class="grid items-center gap-8 lg:grid-cols-2">
                    <div class="order-2 lg:order-1 mt-12 lg:mt-0" data-aos="fade-right" data-aos-duration="2000">
                        <h1
                            class="mt-2 mb-6 text-4xl md:text-5xl xl:text-6xl font-bold tracking-tight md:tracking-tighter">
                            The best offer <br /><span class="text-green-700">for your Investment</span>
                        </h1>

                        <a class="mb-4 inline-block bg-green-700 text-white hover:bg-red-500 py-2 px-8 rounded-lg"
                            href="#glance" role="button">Get started</a>
                        <!-- Add more buttons if needed -->
                    </div>
                    <div class="order-1 lg:order-2 mb-4" data-aos="fade-left" data-aos-duration="2000">
                        <img src="../../public/assets/images/hero-2.jpg"
                            class="w-full rounded-lg shadow-lg dark:shadow-black/20" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->


    <!-- How we help section  -->
    <div class="bg-green-900 text-center py-16 px-8">
        <h1><span class="text-white text-4xl font-semibold mr-3">How We</span> <span
                class="text-green-400 text-4xl font-semibold">Help</span> </h1>
        <p class="text-white text-lg font-medium py-2">
            We promote and facilitate investment by providing a conducive environment,
            <br> accurate information and offering quality services.
        </p>
        <a href="our-services.php"><button
                class="bg-red-500 text-white px-16 py-2  mt-4 font-semibold hover:bg-green-400 hover:text-white hover:rounded-full">Our
                Services</button></a>
    </div>
    <!-- End of how we help section  -->


    <!-- Benue at a glance section  -->
    <div class="container mx-auto py-24" data-aos="fade-up" id="glance" data-aos-duration="2000">
        <div class="mx-auto mb-10">
            <h2 class="font-simibold text-green-500 text-3xl px-8 text-center"><span
                    class="text-red-500 underline underline-offset-4">Benue</span> at a Glance</h2>
        </div>

        <a href="makurdi-capital.php">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center px-4">
                <!-- Each <div> is a single column. Place some content inside to see the effect. -->
                <div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white">
                    <img src="../../public/assets/images/icons/map.png" class="h-20 w-20 mx-auto">

                    <p class="text-lg mt-4">
                    <ul>
                        <li class="font-semibold">
                            Makurdi
                        </li>
                        <ul>
                            <li class="text-sm">
                                Capital
                            </li>
                        </ul>
                    </ul>
                    </p>
                </div>
        </a>
        <a href="localgovernmentareas.php">
            <div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white px-4">
                <img src="../../public/assets/images/icons/area.png" class="h-20 w-20 mx-auto">
                <p class="text-lg mt-4">
                <ul>
                    <li class="font-semibold">
                        Local Government Areas
                    </li>
                    <ul>
                        <li class="text-sm">
                            23
                        </li>
                    </ul>
                </ul>
                </p>
            </div>
        </a>
       <a href="population-details.php"><div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white px-4">
            <img src="../../public/assets/images/icons/overpopulation.png" class="h-20 w-20 mx-auto">

            <p class="text-lg mt-4">
            <ul>
                <li class="font-semibold">
                    Population
                </li>
                <li class="text-sm">
                    6,141,300
                </li>
            </ul>

            </p>
        </div></a>

        <a href="mineral_resources.php">
            <div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white px-4">
                <img src="../../public/assets/images/icons/mining-cart_9490607.png" class="h-20 w-20 mx-auto">
                </img>
                <p class="text-lg mt-4">
                <ul>
                    <li class="font-semibold">
                        Mineral Resources
                    </li>
                </ul>
                <ul>
                    <li class="text-sm">
                        Barytes , Kaolin,Bricks/clay, Lead-Zinc, Coal ,
                        Gypsum, Salt , Limestone,Granite,
                        Gemstones, Fluorite, Gold and more.
                    </li>
                </ul>
                </p>
            </div>
            <a href="vegetation.php">
                <div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white px-4">
                    <img src="../../public/assets/images/icons/vegetation.png" class="h-20 w-20 mx-auto">

                    <p class="text-lg mt-4">
                    <ul>
                        <li class="font-semibold">
                            Vegetation
                        </li>
                    </ul>
                    <ul>
                        <li class="text-sm">
                            Rain Forest
                        </li>
                    </ul>
                    </p>
                </div>
            </a>
           <a href="crop_details.php"><div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white px-6">
                <img src="../../public/assets/images/icons/garden.png" class="h-20 w-20 mx-auto">
                <p class="text-lg mt-4 text-center">
                <ul>
                    <li class="font-semibold">
                        Major Crops
                    </li>
                    <ul>
                        <li class="text-sm">
                            Yam, Maize, Cassava, Soyabeans, Groundnut,Garden Eggs,
                            Rice, Sorghum, Pepper, Tomatoes & more
                        </li>
                    </ul>
                </ul>


                </p>
            </div></a>
            <a href="onestopshop.php" class="flex float-right" data-aos="fade-right">
                <h3 class="text-xl font-mono text-red-500 float-right">Explore More</h3>
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    class="w-8 h-8 mr-8 text-red-500" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3">
                    </path>
                </svg>
            </a>
    </div>
    </div>

    <?php
    require_once('components/footer.php')

        ?>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>



</body>

</html>
