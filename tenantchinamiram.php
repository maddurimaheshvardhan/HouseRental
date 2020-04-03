<?php
 $c = mysqli_connect('localhost','root','');

$mysqli_query = mysqli_select_db('$c','house');

$sql = "SELECT * FROM chinamiram";

$details = mysqli_query($sql);

?>
<html>
<head>
<title>CHINAMIRAM</title>
</head>
<body>

<table width="1000" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>IMAGE</th>
<th>TYPE OF HOUSE</th>
<th>RENT PER MONTH</th>
<th>NAME OF PROVIDER</th>
<th>DNO</th>
<th>CONTACT</th>
<th>ADDRESS</th>
</tr>

 <php
 
	while($details=mysqli_fetch_assoc($records)){
		echo "<tr>";
		echo "<td>".$details['image']."</td>";
		echo "<td>".$details['typeofhouse']."</td>";
		echo "<td>".$details['rentpermonth']."</td>";
		echo "<td>".$details['nameofprovider']."</td>";
		echo "<td>".$details['dno']."</td>";
		echo "<td>".$details['contact']."</td>";
		echo "<td>".$details['address']."</td>";
		echo "</tr>";
?>
</table>
</body>
</html>