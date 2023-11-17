<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "invest_benue";

$conn = mysqli_connect("localhost", "root", "", "invest_benue");

if (!$conn) {
    echo "<h1 class='container bg-dark text-center text-warning'>Not able to connect to database</h1>";
}

?>

