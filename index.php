<?php

$name = $address = $email = $section = $contact = "";
$nameErr = $addressErr = $emailErr = $sectionErr = $contactErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = $_POST["address"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["section"])) {
        $sectionErr = "Section is required";
    } else {
        $section = $_POST["section"];
    }
    if (empty($_POST["contact"])) {
        $contactErr = "Contact is required";
    } else {
        $contact = $_POST["contact"];
    }
}
?>
<style>
    .error {
        color: red;
    }
</style>
<br>
    <?php include("nav.php"); ?>
<br>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <input type="text" name="name" value="<?php echo $name; ?>"> <br>
    <span class="error"><?php echo $nameErr; ?></span> <br>

    <input type="text" name="address" value="<?php echo $address; ?>"> <br>
    <span class="error"><?php echo $addressErr; ?></span> <br>

    <input type="text" name="email" value="<?php echo $email; ?>"> <br>
    <span class="error"><?php echo $emailErr; ?></span> <br>

    <input type="text" name="section" value="<?php echo $section; ?>"> <br>
    <span class="error"><?php echo $sectionErr; ?></span> <br>

    <input type="text" name="contact" value="<?php echo $contact; ?>"> <br>
    <span class="error"><?php echo $contactErr; ?></span> <br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php

include ("connection.php");

if ($name && $address && $email && $section && $contact) {
    $query = mysqli_query($connection, "INSERT INTO info_tbl (name, address, email_address, section, contact) VALUES ('$name', '$address', '$email', '$section', '$contact')");

    if ($query) {
        echo "<script language='javascript'>alert('New record has been inserted successfully');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} 


$view_query = mysqli_query($connection, "SELECT * FROM info_tbl");
echo "<table border='1', width='50%'>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email Address</th>
            <th>Section</th>
            <th>Contact</th>
        </tr>";
while ($row = mysqli_fetch_assoc($view_query)) {
    $user_id = $row["id"];
    $db_name = $row["name"];
    $db_address = $row["address"];
    $db_email = $row["email_address"];
    $db_section = $row["section"];
    $db_contact = $row["contact"];

    echo "<tr>
            <td>$db_name</td>
            <td>$db_address</td>
            <td>$db_email</td>
            <td>$db_section</td>
            <td>$db_contact</td>

            <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>
            <td><a href='ConfirmDelete.php?id=" . $row["id"] . "'>Delete</a></td>

          </tr>";
} echo "</table>";
?>
<hr>

<?php
$John = "John";
$Jane = "Jane";
$Doe = "Doe";
$Alice = "Alice";
$Bob = "Bob";
$names = array("John", "Jane", "Doe", "Alice", "Bob");
foreach ($names as $display_names) {
    echo "$display_names" . "<br>";
}
?>