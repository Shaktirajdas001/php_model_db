<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","oop_crud");

if(count($_POST)>0) 
{
$search=$_POST[email];
$result = mysqli_query($conn,"SELECT * FROM records where email='$email' ");
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
<tr>
<td>Name</td>
<td>mobile</td>
<td>Address</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result))
 {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["address"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>