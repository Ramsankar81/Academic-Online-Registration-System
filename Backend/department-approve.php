<?php require_once("../include/DB.php") ?>
<?php require_once("../include/Session.php") ?>


<?php 
	if(isset($_GET['regd'])){
	$IdFromURL = $_GET['regd'];
	$Query = "UPDATE semester SET dstatus = 'ON' WHERE regd= $IdFromURL";
	$Execute = mysqli_query($Connection,$Query);
	if($Execute){
		$_SESSION["ErrorMessage"]="success";
	    	header("Location:department-section.php");
	}else{
		$_SESSION["ErrorMessage"]="failure";
	    	header("Location:department-section.php");
	}
}
 ?>