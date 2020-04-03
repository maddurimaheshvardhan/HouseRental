<?php

include 'conn.php';

if(isset($_POST['id'])){

 $id	   		 = $_GET['id'];
 $image    		 = $_POST['image'];
 $typeofhouse 	 = $_POST['typeofhouse'];
 $rentpermonth    = $_POST['rentpermonth'];
 $nameofprovider = $_POST['nameofprovider'];
 $dno 			 = $_POST['dno'];
 $contact 		 = $_POST['contact'];
 $address		 = $_POST['address'];
 $q = " INSERT INTO `chinamiram`(`image`, `typeofhouse`, `rentpermonth`, `nameofprovider`, `dno`, `contact`, `address`) VALUES ( '$image', '$typeofhouse', '$rentpermonth', '$nameofprovider', '$dno', '$contact', '$address' )";

  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>CHINAMIRAM</title>
<link rel="icon" type="image/gif/png" href="http://localhost/House/House/15.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
  
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  
  
  
  </head>
<body background="http://localhost/House/House/8.jpg">

  <div class="col-lg-6 m-auto">
 
 <form method="post" action="chinamiram.php">
 <br>
 <div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  INSERT DETAILS </h1>
 </div><br>

  <label> IMAGE </label>
 <input name="image" type="file" name="image" accept="image/*" required><br>

  <label> TYPE OF HOUSE </label>
 <input type="text" name="typeofhouse" class="form-control" required> <br>
 
 <label> RENT PER MONTH </label>
 <input type="text" name="rentpermonth" class="form-control"required> <br>
 
 <label> NAME OF PROVIDER </label>
 <input type="text" name="nameofprovider" class="form-control" required> <br>
 
 <label> DNO </label>
 <input type="text" name="dno" class="form-control" required> <br>
 
 <label> CONTACT </label>
 <input type="text" name="contact" class="form-control" required> <br>
 
 <label> ADDRESS </label>
 <input type="text" name="address" class="form-control" required> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
 <style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 180px;
  height:80px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-radius: 15px 50px;
  border-bottom: solid 4px #627295;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
 </style>
<a href="http://localhost/House/providerlogout.php"><button type= "submit" class="button"  style="float: right;" width="700" height="800"><font size="5" color="white"><b><b>LOGOUT</b></b></a></font></button>


</body>
</html>