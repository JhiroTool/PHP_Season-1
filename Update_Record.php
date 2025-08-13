<?php
include 'connection.php';

$user_id = $_POST["id"];
$new_name = $_POST["new_name"];
$new_address = $_POST["new_address"];
$new_email = $_POST["new_email"];
$new_section = $_POST["new_section"];
$new_contact = $_POST["new_contact"];

$query = mysqli_query($connection, "UPDATE info_tbl SET name='$new_name', address='$new_address', email_address='$new_email', section='$new_section', contact='$new_contact' WHERE id='$user_id'");

if ($query) {
    echo "<script language='javascript'>alert('Record has been Updated');</script>";
    echo "<script>window.location='index.php';</script>";
} else {
    echo "Error updating record: " . mysqli_error($connection);
}
?>