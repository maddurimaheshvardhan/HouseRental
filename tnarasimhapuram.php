<?php

include 'conn.php';

if(isset($_POST['done'])){

 $id	   		 = $_GET['id'];
 $image    		 = $_POST['image'];
 $typeofhouse 	 = $_POST['typeofhouse'];
 $renpermonth    = $_POST['renpermonth'];
 $nameofprovider = $_POST['nameofprovider'];
 $dno 			 = $_POST['dno'];
 $contact 		 = $_POST['contact'];
 $address		 = $_POST['address'];
 $q = " INSERT INTO `narasimhapuram`(`image`, `typeofhouse`, `rentpermonth` `nameofprovider` `dno` `contact` `address`) VALUES ( '$image', '$typeofhouse', '$rentpermonth', '$nameofprovider', '$dno', '$contact', '$address' )";

  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body background="http://localhost/House/House/8.jpg">

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  INSERT DETAILS </h1>
 </div><br>

  <label> <b><font size="3">IMAGE</font></b></label>
 <input name="image" type="file" name="image" accept="image/*" required><br>

  <label> <b><font size="3">TYPE OF HOUSE</font></b> </label>
 <input type="text" name="typeofhouse" class="form-control" required> <br>
 
 <label> <b><font size="3">RENT PER MONTH</font></b> </label>
 <input type="text" name="rentpermonth" class="form-control" required> <br>
 
 <label> <b><font size="3">NAME OF PROVIDER</font></b> </label>
 <input type="text" name="nameofprovider" class="form-control" required> <br>
 
 <label> <b><font size="3">DNO</font></b> </label>
 <input type="text" name="dno" class="form-control" required> <br>
 
 <label> <b><font size="3">CONTACT</font></b> </label>
 <input type="text" name="contact" class="form-control" required> <br>
 
 <label> <b><font size="3">ADDRESS</font></b> </label>
 <input type="text" name="address" class="form-control" required> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>


</body>
</html>