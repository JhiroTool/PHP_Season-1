<?php
    session_start();

    if(isset($_SESSION["id"])){
        $user_id = $_SESSION["id"];
        include("../connection.php");
    }else{
        echo "You musr login first! <a href='../login.php'>Login now!</a>";
    }
?>
  git config --global user.email "jhiroramir@gmail.com"
  git config --global user.name "Jhiro Tool"