<?php require_once("../include/DB.php") ?>
<?php require_once("../include/Session.php") ?>
<?php 
  
  if(isset($_GET['regd'])){
  $Regno = $_GET['regd'];
  
  }


 ?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/92ca1cd8a9.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style1.css">
      
		<style>
			
		</style>
	</head>
	<body>
	<div class="d-flex justify-content-center pt-3 text-success sec1" >
      <h3 class="tx1">CSEA DEPARTMENT </h3>
    </div>
    <table class="table table-bordered">
      <?php 
       $Query = "SELECT * FROM semester WHERE regd = '$Regno'";
       $Execute  = mysqli_query($Connection,$Query);
       $DataRows = mysqli_fetch_array($Execute);
       $Name = $DataRows["name"];
       $Sem = $DataRows["sem"];
       $Branch = $DataRows["branch"];
       $Stream = $DataRows["stream"];
       ?>
        <tbody>
        <tr>
          <th>Registration No:</th>
            <td><?php echo $Regno; ?></td>
        </tr>
        <tr>
          <th>Name</th>
            <td><?php echo $Name; ?></td>
    
        </tr>
      <tr>
          <th>Semester</th>
            <td><?php echo $Sem; ?></td>
        </tr>
         <tr>
          <th>Branch</th>
            <td><?php echo $Branch; ?></td>
        </tr>
        <tr>
          <th>Stream</th>
            <td><?php echo $Stream; ?></td>
        </tr>
    </tbody>
</table>

<table class="table">
      <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Subject Code</th>
            <th scope="col">Subject Name</th>
          </tr>
        </thead>
  <?php 
       $Query = "SELECT * FROM user_name WHERE Regno = '$Regno'";
       $Execute  = mysqli_query($Connection,$Query);
       $SrNo=0;
        while($DataRows = mysqli_fetch_array($Execute)) {
                $Id  = $DataRows["id"];
                $Subcode  = $DataRows["Subcode"];
                $Subname  = $DataRows["Subname"];  
                $SrNo++;

               ?>

      <tbody>
          <td><?php echo $SrNo; ?></td>
           <td><?php echo $Subcode; ?></td>
           <td><?php echo $Subname; ?></td>
        </tbody>
      <?php } ?>
  </table>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
</html>