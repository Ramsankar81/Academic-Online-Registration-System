<?php
$connect = mysqli_connect("localhost", "root", "", "final yr");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM exam_section WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>