<?php require_once("include/DB.php") ?>
<?php require_once("include/Session.php") ?>
<?php 
    if (isset($_POST["submit"])) {
    	$CurrentTime = time();
		$DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
		$DateTime;
		$Post = $_POST['post'];
		if (empty($Post)) {
			$_SESSION["ErrorMessage"]="please fill the This section";
	    	header("Location:news.php");
	    	exit;
		}
		else
		{
			$Query = "INSERT INTO news(datetime,post) VALUES('$DateTime','$Post')";
			$Execute = mysqli_query($Connection,$Query);
			if($Execute){
		 	$_SESSION["ErrorMessage"]="post added";
	    	header("Location:news.php");
	    	exit;
		 	
		}
    }
}
	
 ?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style4.css">
	</head>
	<body>
		<div class="d-flex justify-content-center pt-3 text-success">
			<h3>Add Information About Registration</h3>
		</div>
		<div>
		<hr width="700px;">
		</div>
		<form action="" method="post">
			<div>
	             <?php echo Message(); ?>
	        </div>	
		  <div class="form-group">
			  <label for="comment">Comment:</label>
			  <textarea class="form-control" rows="5" id="comment" name="post"></textarea>
		  </div>
		  <div class=" form-group form-inline d-flex justify-content-end ">
		 
		  <button type="submit" class="btn btn-primary " name="submit">Next</button>
		  </div>
		  </form>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>