 <?php
 $regArr = json_decode($_POST["reg"]);
$nameArr = json_decode($_POST["subname"]);
$emailArr = json_decode($_POST["subcode"]);
$con=mysqli_connect("localhost","root","","registration");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
for ($i = 0; $i < count($nameArr); $i++) {
if(($nameArr[$i] != "")){ /*not allowing empty values and the row which has been removed.*/
$sql="INSERT INTO user_name (Regno,Subcode,Subname)
VALUES
('$regArr','$emailArr[$i]','$nameArr[$i]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
}
}
Print "Data added Successfully !";
mysqli_close($con);
?>