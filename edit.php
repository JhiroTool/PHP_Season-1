<?php
    $user_id = $_REQUEST["id"];
    echo $user_id;
    include 'connection.php';
    $get_record = mysqli_query($connection, "SELECT * FROM info_tbl WHERE id='$user_id'");
    while ($row_edit = mysqli_fetch_assoc($get_record)) {
        echo $db_name = $row_edit["name"];
        echo $db_address = $row_edit["address"];
        echo $db_email = $row_edit["email_address"];
        echo $db_section = $row_edit["section"];
        echo $db_contact = $row_edit["contact"];
    }  
?>
<form method="post" action="Update_Record.php">
    <input type="hidden" name="id" value="<?php echo $user_id; ?>">

    <input type="text" name="new_name" value="<?php echo $db_name; ?>"> <br>
    <span class="error"><?php echo $nameErr; ?></span> <br>

    <input type="text" name="new_address" value="<?php echo $db_address; ?>"> <br>
    <span class="error"><?php echo $addressErr; ?></span> <br>

    <input type="text" name="new_email" value="<?php echo $db_email; ?>"> <br>
    <span class="error"><?php echo $emailErr; ?></span> <br>

    <input type="text" name="new_section" value="<?php echo $db_section; ?>"> <br>
    <span class="error"><?php echo $sectionErr; ?></span> <br>

    <input type="text" name="new_contact" value="<?php echo $db_contact; ?>"> <br>
    <span class="error"><?php echo $contactErr; ?></span> <br>

    <input type="submit" value="Update">
</form>