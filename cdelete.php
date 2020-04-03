<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `chinamiram` WHERE id = $id ";

mysqli_query($con, $q);

header('location:acdisplay.php');

?>