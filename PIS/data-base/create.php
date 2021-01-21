<?php

session_start();
include_once 'connection.php';

$name  = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
$address = filter_input(INPUT_POST, 'Address', FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle = filter_input(INPUT_POST, 'Vehicle', FILTER_SANITIZE_SPECIAL_CHARS);
$license = filter_input(INPUT_POST, 'License', FILTER_SANITIZE_SPECIAL_CHARS);
$aadhar = filter_input(INPUT_POST, 'Aadhar', FILTER_SANITIZE_SPECIAL_CHARS);
$election = filter_input(INPUT_POST, 'Election', FILTER_SANITIZE_SPECIAL_CHARS);

    $queryInsert = $link->query("INSERT INTO TB_USERS VALUES(default, '$name','$email','$address','$phone','$vehicle','$license','$aadhar','$election')"); 
    $affected_rows = mysqli_affected_rows($link);

    if ($affected_rows > 0){
        $_SESSION['msg'] = "<p class='center teal-text darken-3-text'>".'Registration successfully Complete.'."</p>";
        header("Location:../");
    }
