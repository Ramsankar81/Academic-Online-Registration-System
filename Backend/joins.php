<?php require_once("../include/DB.php") ?>
<?php require_once("../include/Session.php") ?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
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
        <tbody>
        	<?php 
        	$Query="SELECT * FROM semester AS s INNER JOIN exam_pdf AS e ON(s.regd = e.regd)";
        	 $Execute  = mysqli_query($Connection,$Query);
        	  while($DataRows = mysqli_fetch_array($Execute)) {
                $Id  = $DataRows["id"];
                // $Regno  = $DataRows["regd"];
                // $Name  = $DataRows["name"];
                // $Stream  = $DataRows["stream"];
                // $Sem  = $DataRows["sem"];

                echo $Id;
            }

        	 ?>
        </tbody>
    </table>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>