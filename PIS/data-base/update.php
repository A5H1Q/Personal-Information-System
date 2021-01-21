<?php
session_start();

include_once 'connection.php';
$id = $_SESSION['id'];

$name  = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
$address = filter_input(INPUT_POST, 'Address', FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle = filter_input(INPUT_POST, 'Vehicle', FILTER_SANITIZE_SPECIAL_CHARS);
$license = filter_input(INPUT_POST, 'License', FILTER_SANITIZE_SPECIAL_CHARS);
$aadhar = filter_input(INPUT_POST, 'Aadhar', FILTER_SANITIZE_SPECIAL_CHARS);
$election = filter_input(INPUT_POST, 'Election', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("UPDATE TB_USERS SET Name ='$name', Email ='$email', Address ='$address', Phone ='$phone', Vehicle ='$vehicle', License ='$license', Aadhar ='$aadhar', Election ='$election' WHERE ID ='$id'");
$affected_rows = mysqli_affected_rows($link);

if ($affected_rows > 0):
    header("Location:../users.php");
endif;
