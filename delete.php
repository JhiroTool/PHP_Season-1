<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["id"];
    $query = mysqli_query($connection, "DELETE FROM info_tbl WHERE id='$user_id'");

    if ($query) {
        echo "<script language='javascript'>alert('Record has been Deleted');</script>";
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}
?>