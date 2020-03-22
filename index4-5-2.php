<?php require_once("include/DB.php") ?>
<?php require_once("include/Session.php") ?>
<?php 
	$Query = "SELECT post FROM news ORDER BY id DESC LIMIT 1";
	$Execute  = mysqli_query($Connection,$Query);
	$DataRows = mysqli_fetch_array($Execute);
	$Post = $DataRows["post"];
 ?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/92ca1cd8a9.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style4.css">
		<link rel="stylesheet"  href="style1.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

		<style>
			
				.check{
                     width: 4vw;
                     height: 4vh;
				}
				.ram2{
					margin-left: 300px;
					padding-top: 40px;
					padding-left: 20px;
					color: #22eaaa;
				}
				.hor{
					width: 600px;
					margin-right: 440px;
					background-color: yellow;
				}
				li{
					font-family: 'Roboto Slab', serif;
				}
				.adi{
					color: red;
				}
		</style>
	</head>
	<body>
		<img src="image/logo igit.png" class="rounded float-left " alt="IGIT,Sarang">
		<img src="image/logo igit.png" class="rounded float-right " alt="The_Back_Codes">

		<div class="ram2">
			<h1>Indira Gandhi Institute Of Technology, Sarang</h1>
			<hr class="hor">
		</div>
		<div class="d-flex justify-content-center">
			<h4>Online Registration System</h4>
		</div>

		<marquee behavior="scroll" direction="left"><span class="adi"><?php echo $Post; ?></span></marquee>

		<ul class="fa-ul">
  <li><i class="fas fa-check-square"></i> The details submitted by the students should be correct and authentic.</li>
  <li><i class="fas fa-check-square"></i> The students should submit their form and details within the stipulated date range.
</li>
  <li><i class="fas fa-check-square"></i>
  	The .pdf,.jpg.jpeg,.png file should be saved and submitted in the format <strong>RegNo-Name </strong> <br>
	Ex:<br> Regd no-1601105033<br>
  	  	Name-Sharmilee De<br>
	Format: <strong>1601105033-Sharmilee De</strong>
</li>
  <li><i class="fas fa-check-square"></i></i> Any correction is not entertained after the submission of the form and registration.
</li>
  
  <li><i class="fas fa-check-square"></i> For any query contact the following person:<br>
	Account section- +91 7377063747<br>
	Examination section- +91 9938465276<br>
	Department section-respective verifying officer of the department.</li>
  
  

</ul>

		<div>
			<form action="page.html" >
				<div class="form-group form-inline ">
				<input type="checkbox" name="checkbox3" value="yes" class="check" required ><p >By checking the box, I certify that have read the above disclaimers and agree to the rules. </p></input>
				</div>
				<div class="d-flex justify-content-center form-group form-inline  ">
				  <button type="submit" class="btn btn-primary " formaction="index4-1-2.php">Proceed</button>
				</div>
			</form>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
	

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>