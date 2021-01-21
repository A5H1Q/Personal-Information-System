<?php

include_once 'connection.php';

$id  = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$queryDelete = $link->query("DELETE FROM TB_USERS WHERE ID ='$id'");
$affected_rows = mysqli_affected_rows($link);

if ($affected_rows > 0):
    header("Location:../users.php");
endif;
