<?php

require_once('connect.php');


$select = "SELECT * FROM news WHERE category = 'investment_news'";
$result = mysqli_query($conn, $select);

?>

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

    <div class="bg-cover bg-center relative h-96 brightness-100"
        style="background-image: url('../../public/assets/images/news.jpg');">
        <div class="absolute inset-0 flex items-center justify-center bg-green-700 bg-opacity-75">
            <div class="text-white text-center">
                <h1 class="text-4xl font-bold">INVEST BENUE NEWS</h1>
                <P>News on investments in Benue State.</P>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <section class="container mx-auto mt-10 p-8 bg-white rounded shadow-lg">
        <h2 class="text-3xl font-semibold mb-6">Latest News</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php foreach ($result as $q) { ?>
                <!-- News Card -->
                <div class="bg-neutral-100 p-6 rounded-lg">
                    <img src="uploads/<?php echo $q['image'] ?>" alt="News Image" class="mb-4 rounded-lg w-full h-[300px]">
                    <h3 class="text-xl font-semibold mb-2"><a href="#">
                            <?php echo $q['headline']; ?>
                        </a></h3>
                    <p class="text-gray-700">
                        <?php echo substr($q['description'], 0, 200); ?>
                    </p>
                    <a href="read_post.php?id=<?php echo $q['id'] ?>"
                        class="text-blue-500 hover:underline mt-4 inline-block">Read more</a>
                </div>
            <?php } ?>

        </div>
    </section>
    <!-- End News Section -->


    <!-- Footer section -->
    <?php
    require_once('components/footer.php')
        ?>

    <!-- End footer section  -->
</body>

</html>
