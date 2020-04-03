<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `narasimhapuram` WHERE id = $id ";

mysqli_query($con, $q);

header('location:andisplay.php');

?>