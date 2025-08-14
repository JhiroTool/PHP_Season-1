<?php
    include ("connection.php");
    if(empty($_GET["search"])){
        echo "Walang laman si GET";
    }else{
        $check = $_GET["search"];
        $terms = explode(" ", $check);
        $q = "SELECT * FROM info_tbl WHERE ";
        $i = 0;
        foreach($terms as $each){
            // Escape the input to prevent SQL injection
            $each = mysqli_real_escape_string($connection, $each);
            
            if($i == 0){
                $q .= " name LIKE '%$each%' ";
            }else{
                $q .= " OR name LIKE '%$each%'";
            }
            $i++; // Move increment after the condition
        }
        
        $query = mysqli_query($connection, $q);
        $c_q = mysqli_num_rows($query);
        
        // Remove undefined $s variable from condition
        if($c_q > 0){
            while($row = mysqli_fetch_assoc($query)){
                echo $name = $row["name"] . "<br>";
                // echo $address = $row["address"] . "<br>";
                // echo $email = $row["email_address"] . "<br>";
                // echo $section = $row["section"] . "<br>";
                // echo $contact = $row["contact"] . "<br>";
            }
        }else{
            echo "No results.";
        }
    }
?>