<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
require_once('components/header.php')
    ?>

<!-- End head section  -->

<body class="">
    <!-- Navbar Section  -->

    <?php
    require_once('components/navbar.php')
        ?>

    <!-- End of Navbar Section  -->


    <section class="flex flex-wrap py-16">
        <article class="w-full md:w-3/4 ">
            <section class="bg-gray-200/50">
                <div class="heading">
                    <h2 class="text-center text-3xl font-semibold tracking-wide text-green-700 py-4 ml-4">
                        Education
                    </h2>
                </div>
                <div class="container md:items-center sm:items-center items-center py-4 px-8 brightness-100">
                    <img src="../../public/assets/images/edducation2.jpg" alt="sector-img"
                        class="w-full h-96 rounded-md" />
                    <p class="text-justify font-normal tracking-tight mt-4">
                        Investing in education is crucial for human capital
                        development. Benue State has a growing population
                        and the establishment of information and
                        communication technology based schools,
                        vocational training centers and higher education
                        institutions and innovation apprenticeship centers
                        will enhance research for fast technological
                        development.
                    </p>
                </div>
            </section>
        </article>

        <aside class="w-full md:w-1/4 min-h-screen bg-white px-4 md:block py-4">
            <ul>
                <ul class="flex mb-4 bg-green-200 py-4 px-4 hover:bg-green-400 hover:text-white">
                    <img src="../../public/assets/images/icons/education.png" class="h-8 w-8 mr-2" />
                    <li class="text-xl tracking-wide">
                        <a href="education-details.php">Education</a>
                    </li>
                </ul>
                <ul class="flex mb-4 bg-green-200 py-4 px-4 hover:bg-green-400 hover:text-white">
                    <img src="../../public/assets/images/icons/healthcare.png" class="h-8 w-8 mr-2" />
                    <li class="text-xl tracking-wide">
                        <a href="healthcare-details.php">Healthcare</a>
                    </li>
                </ul>
                <ul class="flex mb-4 bg-green-200 py-4 px-4 hover:bg-green-400 hover:text-white">
                    <img src="../../public/assets/images/icons/energy.png" class="h-8 w-8 mr-2" />
                    <li class="text-xl tracking-wide">
                        <a href="energy-details.php">Energy</a>
                    </li>
                </ul>
                <ul class="flex mb-4 bg-green-200 py-4 px-4 hover:bg-green-400 hover:text-white">
                    <img src="../../public/assets/images/icons/transportation.png" class="h-8 w-8 mr-2" />
                    <li class="text-xl tracking-wide">
                        <a href="transportation-details.php">Transportation</a>
                    </li>
                </ul>
                <ul class="flex mb-4 bg-green-200 py-4 px-4 hover:bg-green-400 hover:text-white">
                    <img src="../../public/assets/images/icons/infrastructure.png" class="h-8 w-8 mr-2" />
                    <li class="text-xl tracking-wide">
                        <a href="infrastructure-details.php">Infrastructure</a>
                    </li>
                </ul>
                <ul class="flex mb-4 bg-green-200 py-4 px-4 hover:bg-green-400 hover:text-white">
                    <img src="../../public/assets/images/icons/minerals.png" class="h-8 w-8 mr-2" />
                    <li class="text-xl tracking-wide">
                        <a href="minerals-details.php">Mineral Resources</a>
                    </li>
                </ul>
                <ul class="flex mb-4 bg-green-200 py-4 px-4 hover:bg-green-400 hover:text-white">
                    <img src="../../public/assets/images/icons/agriculture.png" class="h-8 w-8 mr-2" />
                    <li class="text-xl tracking-wide">
                        <a href="agriculture-details.php">Agriculture</a>
                    </li>
                </ul>
            </ul>
        </aside>
    </section>


    <!-- Footer section -->
    <?php
    require_once('components/footer.php')
        ?>
    <!-- End footer section  -->

</body>

</html>
