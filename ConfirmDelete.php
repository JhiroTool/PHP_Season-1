<?php
$user_id = $_REQUEST["id"];
include 'connection.php';

// First, get the record data to display
$query_select = mysqli_query($connection, "SELECT * FROM info_tbl WHERE id='$user_id'");
$row_delete = mysqli_fetch_assoc($query_select);

if ($row_delete) 
    $db_name = $row_delete["name"];
    $db_address = $row_delete["address"];
    $db_email = $row_delete["email_address"];
    $db_section = $row_delete["section"];
    $db_contact = $row_delete["contact"];
    
    echo "<h1>Are you sure you want to delete $db_name?</h1>";

?>
<form method="post" action="delete.php">
    <input type="hidden" name="id" value="<?php echo $user_id; ?>">
    <input type="submit" value="Yes">
</form>
<form method="post" action="index.php">
    <input type="submit" value="No">
</form>