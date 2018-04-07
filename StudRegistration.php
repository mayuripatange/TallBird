<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"assignment");

$str= "select * from registration_record";
$result= mysqli_query($con,$str);

while($row=mysqli_fetch_assoc($result))
{
	$JsonArr[] = $row;
}
echo json_encode($JsonArr);

?>
