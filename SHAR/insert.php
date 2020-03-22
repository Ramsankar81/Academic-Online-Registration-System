<?php
$connect = mysqli_connect("localhost", "root", "", "registration");
if(isset( $_POST["sub_code"], $_POST["sub_name"]))
{
 $sub_code = mysqli_real_escape_string($connect, $_POST["sub_code"]);
 $sub_name = mysqli_real_escape_string($connect, $_POST["sub_name"]);
 $query = "INSERT INTO user(sub_code, sub_name) VALUES('$sub_code', '$sub_name')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
