<?php
include_once('../controllers/connection.php');


?>

<!DOCTYPE html>
<html lang="en">

<!-- Head section -->
<?php
require_once('components/header.php')
    ?>

<!-- End Head section  -->

<body class="font-sans bg-gray-100">

    <div class="container mx-auto p-8 mt-8 bg-white shadow-md max-w-md rounded-md">
        <h1 class="text-2xl font-semibold mb-6">Submit PDF</h1>

        <!-- Form -->
        <form action="submit.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title:</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="file" class="block text-sm font-medium text-gray-600">PDF File:</label>
                <input type="file" name="file" id="file" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" name="submit"
                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
        </form>
    </div>
</body>

</html>
