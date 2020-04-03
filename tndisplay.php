<!DOCTYPE html>
<html>
<head>
 <title>NARASIMHAPURAM</title>
<link rel="icon" type="image/gif/png" href="http://localhost/House/House/15.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body background="http://localhost/House/House/c.jpg">

  <div class="container">
 <div class="col-lg-12">
 <style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: skyblue;
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
<a href="http://localhost/House/tenantlogout.php"><button type= "submit" class="button"  style="float: right;" width="700" height="800"><font size="5" color="black"><b><b>LOGOUT</b></b></a></font></button>
<br>
 <br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 

 <th> IMAGE </th>
 <th> TYPE OF HOUSE </th>
 <th> RENT PER MONTH </th>
 <th> NAME OF PROVIDER </th>
 <th> DNO </th>
 <th> CONTACT </th>
 <th> ADDRESS </th>


  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from narasimhapuram ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">

 <td> <image src = "House/<?php echo $res['image'];  ?>" width="100" height="100"> </td>
 <td> <?php echo $res['typeofhouse'];  ?> </td>
 <td> <?php echo $res['rentpermonth'];  ?> </td>
 <td> <?php echo $res['nameofprovider'];  ?> </td>
 <td> <?php echo $res['dno'];  ?> </td>
 <td> <?php echo $res['contact'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>