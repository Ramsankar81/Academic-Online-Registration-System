<?php 
session_start();
function Message(){
	if(isset($_SESSION["ErrorMessage"])){
		$Output="<div class=\"text-danger\">";
		$Output.=htmlentities($_SESSION["ErrorMessage"]);
		$Output.="</div>";
		$_SESSION["ErrorMessage"]  = null;
		return $Output;

	}
 }
 ?>
