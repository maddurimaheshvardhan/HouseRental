<!DOCTYPE html>
<html>
<head>
 <title>KOVVADA</title>
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
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> ID </b></b></b></th>
 <th> IMAGE </th>
 <th> TYPE OF HOUSE </th>
 <th> RENT PER MONTH </th>
 <th> NAME OF PROVIDER </th>
 <th> DNO </th>
 <th> CONTACT </th>
 <th> ADDRESS </th>
 <th> OPERATION </th>


  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from kovvada ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <image src = "House/<?php echo $res['image'];  ?>" width="100" height="100"> </td>
 <td> <?php echo $res['typeofhouse'];  ?> </td>
 <td> <?php echo $res['rentpermonth'];  ?> </td>
 <td> <?php echo $res['nameofprovider'];  ?> </td>
 <td> <?php echo $res['dno'];  ?> </td>
 <td> <?php echo $res['contact'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="cdelete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> <br><br>
  <button class="btn-primary btn"> <a href="cupdate.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

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