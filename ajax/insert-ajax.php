<?php
$regArr = json_decode($_POST["regno"]);
$subcodeArr = json_decode($_POST["subcode"]);
$subnameArr = json_decode($_POST["subcode"]);
$con=mysqli_connect("localhost","root","","registration");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	echo "database connected succesfully";
	
}
for ($i = 0; $i < count($regArr); $i++) {
if(($regArr[$i] != "")){ /*not allowing empty values and the row which has been removed.*/
$sql="INSERT INTO user_name (Regno,Subcode,Subname)
VALUES
('$regArr[$i]',$subcodeArr[$i]','$subnameArr[$i]')";
	echo "$subcodeArr";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
}
Print "Data added Successfully !";
}

mysqli_close($con);
?>
