<?php require_once("../include/DB.php") ?>
<?php require_once("../include/Session.php") ?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/92ca1cd8a9.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style1.css">

		<style>
			.sec1{
        background-color: #5fc9f3;
      }
      .tx1{
        color: black;
      }
		</style>
	</head>
	<body>

  	 <div class="d-flex justify-content-center pt-3 text-success sec1" >
        <h3 class="tx1">Account Section</h3>
     </div>
     <div>
               <?php echo Message(); ?>
     </div>  
    <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Not Verified</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab " data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Verified</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Reg No</th>
            <th scope="col">Name</th>
            <th scope="col">Stream</th>
            <th scope="col">Sem</th>
            <th scope="col">Preview</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
         <?php 
          $Query="SELECT * FROM semester AS s INNER JOIN account_pdf AS e ON(s.regd = e.regd) WHERE e.status='OFF' AND s.dstatus='OFF'";
           $Execute  = mysqli_query($Connection,$Query);
          $SrNo=0;
          while($DataRows = mysqli_fetch_array($Execute)) {
                $Id  = $DataRows["id"];
                $Regno  = $DataRows["regd"];
                $Name  = $DataRows["name"];
                $Stream  = $DataRows["stream"];
                $Sem  = $DataRows["sem"];
                $File = $DataRows["filename"];
                $SrNo++;

               ?>
         
        <tbody>
          <td><?php echo $SrNo; ?></td>
           <td><?php echo $Regno; ?></td>
            <td><?php echo $Name; ?></td>
             <td><?php echo $Stream; ?></td>
              <td><?php echo $Sem; ?></td>
              <td><a href=" <?php echo "../upload/".$File; ?> " target="_blank"><span class="btn btn-secondary">preview</span></a></td>
             <td><a href="account-approve.php?regd=<?php echo $Regno; ?>"><span class="btn btn-warning">Verify</span></a></td>
        </tbody>
      <?php } ?>
      </table>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Reg No</th>
            <th scope="col">Name</th>
            <th scope="col">Stream</th>
            <th scope="col">Sem</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php 
          $Query = "SELECT * FROM semester AS s INNER JOIN account_pdf AS e ON(s.regd = e.regd) WHERE e.status='ON' AND s.dstatus='OFF' ";
          $Execute  = mysqli_query($Connection,$Query);
          $SrNo=0;
          while($DataRows = mysqli_fetch_array($Execute)) {
                $Id  = $DataRows["id"];
                 $Regno  = $DataRows["regd"];
                $Name  = $DataRows["name"];
                $Stream  = $DataRows["stream"];
                $Sem  = $DataRows["sem"];
                $SrNo++;

               ?>
         
        <tbody>
          <td><?php echo $SrNo; ?></td>
           <td><?php echo $Regno; ?></td>
           <td><?php echo $Name; ?></td>
             <td><?php echo $Stream; ?></td>
              <td><?php echo $Sem; ?></td>
             <td><span class="btn btn-success">Verified</span></td>
        </tbody>
      <?php } ?>
      </table>
  </div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
</html>