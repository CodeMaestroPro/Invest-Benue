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
            <ul class="flex flex-col text-gray-500 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                data-te-navbar-nav-ref>
                <!-- Home link -->
                <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                    <a href="index.php"
                        class="block py-2 pl-3 pr-4 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500"
                        aria-current="page">Home</a>
                </li>
                <!-- Dropdown link -->
                <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref data-te-dropdown-ref>
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
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="who_we_are.php">Who we are</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="governance.php">Our Governance</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="management_team.php">Management Team</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4 ">
                            <a href="units.php">Units</a>
                        </li>
                    </ul>
                </li>
                <!-- Dropdown link -->
                <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref data-te-dropdown-ref>
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
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="sectors.php">Opportunities</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="whybenue.php">Why Benue</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-4">
                    <a href="portfolio.php"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Portfolio</a>
                </li>
                <!-- Dropdown link -->
                <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref data-te-dropdown-ref>
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
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="onestopshop.php">E-Regulations</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="e-opportunities-portal.php">E-Opportunities</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="#">Trade Procedure</a>
                        </li>
                        <li type="button"
                            class="text-white mt-2 bg-green-700 hover:bg-white hover:text-green-700 hover: border border-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mb-4">
                            <a href="../../public/assets/pdfs/Investment-Application-Form.pdf"
                                download="Investment-Application-Form.pdf">Invest Now!</a>
                        </li>
                    </ul>
                </li>
                <!-- Dropdown link -->
                <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref data-te-dropdown-ref>
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
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="investment_news.php">Investment News</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="industry_news.php">Industry News</a>
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50 mb-4">
                            <a href="event_news.php">Our Events</a>
                        </li>
                    </ul>
                </li>
                <!-- link -->
                <li class="">
                    <a href="contact.php"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- End of Navbar Section  -->
