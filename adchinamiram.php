<?php
	$c 				= mysqli_connect("localhost","root","","house");
	
	$id = $_GET['id'];
	$image = $_GET['image'];
	$typeofhouse = $_GET['typeofhouse'];
	$rentpermonth = $_GET['rentpermonth'];
	$nameofprovider = $_GET['nameofprovider'];
	$dno = $_GET['dno'];
	$contact = $_GET['contact'];
	$address = $_GET['address'];
	
    $em       		= "SELECT id,image,typeofhouse,rentpermonth,nameofprovider,dno,contact,address FROM chinamiram WHERE id='$id'";
    $q        		= mysql_query($em);
    $n        		= mysql_fetch_assoc($q);
    $image 			= mysql_real_escape_string($_POST['image']);
    $typeofhouse    = mysql_real_escape_string($_POST['typeofhouse']);
    $rentpermonth   = mysql_real_escape_string($_POST['rentpermonth']);
	$nameofprovider	= mysql_real_escape_string($_POST['nameofprovider']);
    $dno   		    = mysql_real_escape_string($_POST['dno']);
    $contact		= mysql_real_escape_string($_POST['contact']);
	$address		= mysql_real_escape_string($_POST['address']);
    $sql			= "insert into adchinamiram values('$id','$image', '$typeofhouse', '$rentpermonth','$nameofprovider','$dno', '$contact', '$address')";

    if(!(mysql_query($sql)))
    {
        echo "Sorry!!! we were unable to process please try again";
    }
    else
    {
        echo "customized";
    }

?>