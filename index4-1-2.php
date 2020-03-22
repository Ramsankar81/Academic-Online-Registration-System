<?php require_once("include/DB.php") ?>
<?php require_once("include/Session.php") ?>

<?php
	if(isset($_POST["Save"])){
	    $Sem =$_POST["sem"];
	    $Stream = $_POST["stream"];
	    $Hostel = @$_POST['hstl'];

	    /*if($Sem==''|| $Stream=='')
	    {

	        $_SESSION["ErrorMessage"]="please fill the hostel section";
	        header("Location:index4-1-2.php");
	        exit;
	    } 
	    elseif (!empty($Hostel)) {
	    	# code...
	    	$_SESSION["ErrorMessage"]="please fill the hostel section";
	    	header("Location:index4-1-2.php");
	    	exit;
	    }
	    else
	    {
	    	header("Location:index5.php");
	    	exit;
	    } */
	  

	    if(isset($_POST["hstl"]))
	    {
	    	$Hostel=$_POST["hstl"];
	    }
	    else
	    {
	    	$Hostel= "";
	    }

	      if (empty($Hostel)||$Sem==''|| $Stream=='') {
	    	$_SESSION["ErrorMessage"]="please fill the hostel section";
	    	header("Location:index4-1-2.php");
	    	exit;
	    }
	     else
	    {
	    	header("Location:index4-4.php?sem=$Sem&stream=$Stream&hstl=$Hostel");
	    	exit;
	    }
	    
	} 
?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style4.css">
				<link rel="stylesheet"  href="style1.css">
		<style>
			.next{
				margin-left: 300px;
				padding: 14px 40px;
			}
		</style>	

	</head>
	<body>
		<form action="index4-1-2.php" class="pt-5" method="post">

			<div>
	             <?php echo Message(); ?>
	        </div>	
		  <div class="form-group form-inline ml-5" >
		    <label for="email" class="mr-5 col-sm-2">Registration No.:</label>
		    <select name="sem" id="sem" class="form-control" >
					<option value="">--Select Semester--</option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
					<option value="6th">6th</option>
					<option value="7th">7th</option>
					<option value="8th">8th</option>
					<option value="9th">9th</option>
					<option value="10th">10th</option>
		    </select>
		</div>
		<div class="form-group form-inline ml-5 " >
		    <label for="email" class="mr-5 col-sm-2">Stream:</label>
		    <select name="stream" id="stream" class="form-control" >
					<option value="">--Select Stream--</option>
					<option value="B.Tech">B.Tech</option>
					<option value="MCA">MCA</option>
					<option value="MSc">MSc</option>
					<option value="M.Tech">M.Tech</option>
					<option value="Diploma">Diploma</option>
					<option value="PHD">PHD</option>
					<option value="others">others</option>
		    </select>
		</div>
		<!-- Default checked -->

		<div>
	             <?php echo Message(); ?>
	        </div>	

		<div class="form-group form-inline ml-5">
			<label class="mr-5 col-sm-2">Hostel Occupant:</label>
		<!--<input type="checkbox" checked data-toggle="toggle"> -->		
	        <input type="radio" name="hstl" id="yes" class="form-control" value="yes">
			<label for="yes">YES&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	        
			<input type="radio" name="hstl" id="no" class="form-control" value="no">
			<label for="no">NO</label>
		</div>
		<div class=" form-group form-inline next">
		  <button type="submit" class="btn btn-primary" style="padding: 10px 80px;" name="Save">Save</button>
		</div>
		</form>

				<div class="mt-5 pt-3 pb-1 footer fixed-bottom">
		<div class="container">
		  <div class="row">
		    <div class="col-lg-5 col-xs-12 about-company">
		      <h2>Heading</h2>
		      <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
		      <p><a href="#"><i class="fab fa-facebook-square fa-3x"></i></a><a href="#"><i class="fab fa-linkedin fa-3x"></i></a></p>
		    </div>
		    <div class="col-lg-3 col-xs-12 links">
		      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
		        <ul class="m-0 p-0">
		          <li>- <a href="#">Lorem ipsum</a></li>
		          <li>- <a href="#">Nam mauris velit</a></li>
		          <li>- <a href="#">Etiam vitae mauris</a></li>
		        </ul>
		    </div>
		    <div class="col-lg-4 col-xs-12 location">
		      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
		      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
		      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
		      <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
		    </div>
		  </div>
		  <div class="row mt-1">
		    <div class="col copyright">
		      <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
		    </div>
		  </div>
		</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
	</body>
</html>