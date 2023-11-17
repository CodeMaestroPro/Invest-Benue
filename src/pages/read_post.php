<?php
require_once('connect.php');


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM news WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}

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

    
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container mx-auto max-w-[900px] p-5 mt-19 bg-white rounded shadow-lg">
        <div class="">

            <?php foreach ($query as $q) { ?>
                <div class="">

                    <article class="entry">
                        <div class="relative group">
                            <div class="transition-transform duration-300 transform group-hover:scale-105">
                                <img src="uploads/<?php echo $q['image'] ?>" alt=""
                                    class="max-w-full rounded-md h-auto max-h-[500px] mx-auto object-cover cursor-pointer">
                            </div>
                            <div
                                class="absolute bottom-0 left-11 bg-green-500 text-white rounded-md p-2 text-xs md:text-sm lg:text-base">
                                <a href="blog-single.html">
                                    <?php echo substr($q['date'], 0, 200); ?>
                                </a>
                            </div>
                        </div>





                        <h1 class="heading mx-auto text-center text-3xl font-serif p-3">
                            <?php echo $q['headline']; ?>
                        </h1>
                        <hr>
                        <div class="content text-center p-5 leading-relaxed text-justify">
                            <p class="mb-4">
                                <?php echo $q['description']; ?>
                            </p>
                        </div>
                        <!-- End post content -->

                    </article>

                </div>
            <?php } ?>

        </div>
    </div>


    <!-- Footer section -->
    <?php
    require_once('components/footer.php')
        ?>

    <!-- End footer section  -->
</body>

</html>
