<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `kovvada` WHERE id = $id ";

mysqli_query($con, $q);

header('location:akdisplay.php');

?>