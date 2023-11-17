<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="">


    <!-- Main navigation container -->
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center">
                <img src="../../public/assets/images/logo.jpg" class="h-8 mr-3" alt="Logo">
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white text-green-700">Invest<span
                        class="text-red-500">Benue</span></span>
            </a>
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContent5"
                aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navbar container -->
            <!-- Collapsible navbar container -->
            <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center justify-center lg:mt-0 lg:!flex lg:basis-auto"
                id="navbarSupportedContent5" data-te-collapse-item>
                <!-- Left links -->
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                    data-te-navbar-nav-ref>
                    <!-- Home link -->
                    <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1 font-bold" data-te-nav-item-ref>
                        <a href="index.php"
                            class="block py-2 pl-3 pr-4 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500"
                            aria-current="page">Home</a>
                    </li>
                    <!-- Dropdown link -->
                    <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1 font-bold" data-te-nav-item-ref data-te-dropdown-ref>
                        <!-- Dropdown -->
                        <a class="flex items-center text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            About
                            <span class="ml-1 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="who_we_are.php">Who we are</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="governance.php">Our Governance</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="management_team.php">Management Team</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="units.php">Units</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Dropdown link -->
                    <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1 font-bold" data-te-nav-item-ref data-te-dropdown-ref>
                        <!-- Dropdown -->
                        <a class="flex items-center text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            Investment
                            <span class="ml-1 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="sectors.php">Opportunities</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="whybenue.php">Why Benue</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4 font-bold">
                        <a href="portfolio.php"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Portfolio</a>
                    </li>
                    <!-- Dropdown link -->
                    <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1 font-bold" data-te-nav-item-ref data-te-dropdown-ref>
                        <!-- Dropdown -->
                        <a class="flex items-center text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            Investment Procedures
                            <span class="ml-1 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max w-60 h-70 p-3 list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="onestopshop.php">E-Regulations</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="e-opportunities-portal.php">E-Opportunities</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="#">Trade Procedured</a>
                            </li>
                            <li type="button"
                                class="text-white mt-2 bg-green-700 hover:bg-white hover:text-green-700 hover: border border-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mb-4">
                                <a href="../../public/assets/pdfs/Investment-Application-Form.pdf"
                                    download="Investment-Application-Form.pdf">Invest Now!</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Dropdown link -->
                    <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1 font-bold" data-te-nav-item-ref data-te-dropdown-ref>
                        <!-- Dropdown -->
                        <a class="flex items-center text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            News
                            <span class="ml-1 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="investment_news.php">Investment News</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="industry_news.php">Industry News</a>
                            </li>
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 font-bold">
                                <a href="event_news.php">Our Events</a>
                            </li>
                        </ul>
                    </li>
                    <!-- link -->
                    <li class="font-bold">
                        <a href="contact.php"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- End of Navbar Section  -->
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
                        <h2 class="text-3xl tracking-wider text-white font-semibold">Invest In Benue Food Basket Of The
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
                        <h5 class="text-3xl tracking-wider text-white font-semibold">Think Investment Think Benue State
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


    <!-- Message of the Governor  -->

    <!-- <h1 class="text-4xl font-mono text-white-600 tracking-wide leading-tight mb-6 mt-4 text-center">
        WHY BENUE
    </h1> -->

    <section class="mb-20">
        <!-- Jumbotron -->
        <div class="bg-neutral-100 px-6 py-12 text-center dark:bg-neutral-900 md:px-12 lg:text-left">
            <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div class="mt-12 lg:mt-0">
                        <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl"
                            data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" data-aos-mirror="true"
                            data-aos-once="false" data-aos-anchor-placement="top-center">
                            The best offer <br /><span class="text-green-700">for your Investment</span>
                        </h1>

                        <a class="mb-2 inline-block hover:bg-red-500 rounded bg-green-700 px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] md:mr-2 md:mb-0"
                            data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Get
                            started</a>
                        <!-- <a class="inline-block rounded px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-green-700 transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-green-700 focus:text-green-700 focus:outline-none focus:ring-0 active:text-primary-700 dark:hover:bg-neutral-800 dark:hover:bg-opacity-60"
                            data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Learn more</a> -->
                    </div>
                    <div class=" lg:mb-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="2000"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
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

    <div style="text-align:center" class="h_wehelp">
        <h1>How We <span>Help</span> </h1>
        <p style="color:#fff; font-family:times new roman">
            We promote and facilitate investors by advocating for a
            conducive investment climate, <br> providing accurate information
            and offering quality services
        </p>
        <a href="our-services.php"><button class="bg-red-500 text-white px-16 py-2  mt-4 font-semibold"
                id="service-btn">Our Services</button></a>
    </div>
    <!-- End of how we help section  -->

    <!-- Benue at a glance section  -->
    <div class="container mx-auto py-24" data-aos="fade-left" data-aos-duration="2000" data-aos-mirror="true"
        data-aos-once="false" data-aos-anchor-placement="top-center">
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
        <div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white px-4">
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
        </div>

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
            <div class="bg-neutral-100 py-2 hover:bg-green-700 text-green-700 hover:text-white px-6">
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
            </div>
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

    <!-- End of Benue at a glance section  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

    <!-- Footer section -->
    <footer class="bg-neutral-100 text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left">
        <div
            class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between">
            <div class="mr-12 hidden lg:block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Social network icons container -->
            <div class="flex justify-center">
                <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                            fill-rule="evenodd" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                    </svg>
                </a>
                <a href="#!" class="text-neutral-600 dark:text-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Main container div: holds the entire content of the footer, including four sections (TW elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
        <div class="mx-6 py-10 text-center md:text-left">
            <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- TW elements section -->
                <div class="">
                    <h6 class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
                        <img src="../../public/assets/images/logo.jpg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-4 w-4">
                        <path
                            d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                        </svg>
                        Invest Benue
                    </h6>
                    <p>
                        Benue Investment(BenInvest) is a statutory body established in 2023 and operating through
                        diverse businesses with the main objective of promoting investments in Benue.
                    </p>
                </div>
                <!-- Products section -->
                <div class="">
                    <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                        Products
                    </h6>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">OneStopShop</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">E-Opportunities</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">E-Regulations</a>
                    </p>
                    <p>
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">Opportunities</a>
                    </p>
                </div>
                <!-- Useful links section -->
                <div class="">
                    <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                        Useful links
                    </h6>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">About</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">Investments</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">E-services</a>
                    </p>
                    <p>
                        <a href="#!" class="text-neutral-600 dark:text-neutral-200">Events</a>
                    </p>
                </div>
                <!-- Contact section -->
                <div>
                    <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                        Contact
                    </h6>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-5 w-5">
                            <path
                                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path
                                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        Benue State Government House.
                    </p>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-5 w-5">
                            <path
                                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path
                                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                        </svg>
                        info@investbenue.com
                    </p>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                clip-rule="evenodd" />
                        </svg>
                        + 234 703 016 3700
                    </p>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                clip-rule="evenodd" />
                        </svg>
                        + 234 803 253 9476
                    </p>
                </div>
            </div>
        </div>

        <!--Copyright section-->
        <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-700">
            <span>© 2023 Copyright:</span>
            <a class="font-semibold text-neutral-600 dark:text-neutral-400"
                href="https://tw-elements.com/">Invest_Benue</a>
        </div>
    </footer>

    <!-- End of footer section  -->

    <button id="back-to-top"
        class="fixed bottom-5 right-5 z-50 p-3 bg-green-700 text-white rounded-full hover:bg-black-600 focus:outline-none"
        title="Back to Top">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.querySelector('.lg\\:hidden');

            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });

            window.addEventListener('click', function (event) {
                if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    </script>

    <script>
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
