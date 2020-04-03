<?php
session_start();
unset($_SESSION['sess_username']);
session_destroy();
header("location: Mainpage1.html");
exit;


?>
			