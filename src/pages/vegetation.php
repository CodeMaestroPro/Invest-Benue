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

    <div class="container mx-auto p-6 mt-10">

        <!-- Large screens (6 columns for text, 6 columns for images) -->
        <div class="md:grid md:grid-cols-2 md:gap-6 mt-10">

            <!-- Column 1: Text -->
            <div class="md:col-span-6">
                <h1 class="text-3xl font-bold mb-4  sm:text-center md:text-center lg:text-center text-gray-500">
                    Vegetation Types in Benue State</h1>
                <!-- Guinea Savanna Woodland -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold mb-2  text-gray-500">Guinea Savanna Woodland</h2>
                    <p class="mb-4 text-justify">Covers the northern part of Benue State and is characterized by
                        grasslands with scattered trees. It is typical of areas like Katsina-Ala, Ukum, and Logo Local
                        Government Areas.</p>
                    <img src="../../public/assets/images/Guinea Savanna Woodland.jpg" alt="Guinea Savanna Woodland"
                        class="custom-image">
                </div>

                <!-- Sudan Savanna -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold mb-2  text-gray-500">Sudan Savanna</h2>
                    <p class="mb-4 text-justify">Located in the central part of the state and consists of grasslands
                        with some tree cover. It can be found in areas like Gwer, Makurdi, and Guma Local Government
                        Areas.</p>
                    <img src="../../public/assets/images/Sudan Savanna.jpg" alt="Sudan Savanna" class="custom-image">
                </div>

                <!-- Forest and Woodland Savannah -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold mb-2  text-gray-500">Forest and Woodland Savannah</h2>
                    <p class="mb-4 text-justify">In the southern part of Benue State, especially in areas like Obi, Oju,
                        and Okpokwu Local Government Areas, you can find more wooded savanna and pockets of tropical
                        forests.</p>
                    <img src="../../public/assets/images/Forest and Woodland Savannah.jpg"
                        alt="Forest and Woodland Savannah" class="custom-image">
                </div>

                <!-- Riparian Vegetation -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold mb-2  text-gray-500">Riparian Vegetation</h2>
                    <p class="mb-4 text-justify">Areas along the banks of the Benue River and its tributaries feature
                        riparian vegetation, which includes a variety of trees and water-loving plants. Local government
                        areas like Agatu and Apa have such vegetation.</p>
                    <img src="../../public/assets/images/Riparian Vegetation.jpg" alt="Riparian Vegetation"
                        class="custom-image">
                </div>

                <!-- Montane Vegetation -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold mb-2  text-gray-500">Montane Vegetation</h2>
                    <p class="mb-4 text-justify">The southeastern part of Benue State, particularly in local government
                        areas like Kwande and Ushongo, has more elevated terrain and may exhibit montane vegetation
                        types.</p>
                    <img src="../../public/assets/images/Montane Vegetation.jpg" alt="Montane Vegetation"
                        class="custom-image">
                </div>

                <!-- Mangrove Swamps -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold mb-2  text-gray-500">Mangrove Swamps</h2>
                    <p class="mb-4 text-justify">In areas near the confluence of the Benue and Niger Rivers, such as in
                        Buruku Local Government Area, you can find mangrove swamps, which are characterized by
                        specialized vegetation adapted to brackish water.</p>
                    <img src="../../public/assets/images/Mangrove Swamps.jpg" alt="Mangrove Swamps"
                        class="custom-image">
                </div>
            </div>

        </div>

    </div>
    <!-- Footer section -->
    <?php
    require_once('components/footer.php')
        ?>

    <!-- End footer section  -->
</body>

</html>
