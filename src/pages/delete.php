<?php
include_once('connect.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sqli = "SELECT * FROM news WHERE id = $id";
    $execute = mysqli_query($conn, $sqli);
}
// Delete a post
if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM news WHERE `id` = $id";
    $del = mysqli_query($conn, $sql);

    header("Location: admin.php?info=deleted");
    exit();
}
?>

