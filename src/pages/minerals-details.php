<!DOCTYPE html>
<html lang="en">

<!-- Head section -->
<?php
require_once('components/header.php')
    ?>

<!-- End Head section  -->

<body>

    <!-- Navbar Section  -->

    <?php
    require_once('components/navbar.php')
        ?>

    <!-- End of Navbar Section  -->
    
    <section class="flex flex-wrap py-16">
        <article class="w-full md:w-3/4">
            <section class="bg-gray-200/50">
                <div class="heading">
                    <h2 class="text-center text-3xl font-semibold tracking-wide text-green-700 py-4 ml-4">
                        Mineral Resources Potential
                    </h2>
                </div>
                <div class="container md:items-center sm:items-center items-center py-4 px-8 brightness-100">
                    <img src="../../public/assets/images/minerals.jpg" alt="sector-img"
                        class="w-full h-96 rounded-md" />
                    <p class="text-justify font-normal tracking-tight mt-4">
                        The major impediment to the exportation of Benue's yam is packaging
                        and the method of preservation; hence providing an opportunity for
                        yam flour and cassava flour processing, which have tremendous export
                        value. For instance, yam import value in the USA in 2020 was $85.89
                        million; in Canada, it was $35.35 million while in the UK it was
                        $14.29 million, according to statistics by Tridge trade
                        intelligence. Although Benue State is still in the process of
                        building reliable data to showcase the number of tubers of yam
                        produced in the state, it is established knowledge that Benue State
                        supplies most of the major yam markets in Nigeria. A food packaging
                        investor who understands the global standard of food processing and
                        packaging can come in to tap in the huge yam and cassava value chain
                        to harness the Benue yam's global market potential.

                    </p>
                </div>
            </section>
        </article>
        <aside class="w-full md:w-1/4 min-h-screen bg-white px-4  md:block py-4">
            <ul>
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
                        <a href="education-details.php">Education</a>
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
