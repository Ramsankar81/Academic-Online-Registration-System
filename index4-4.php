<?php require_once("include/DB.php") ?>
<?php require_once("include/Session.php") ?>
<?php 
	$Sem=$_GET["sem"];
	$Stream= $_GET["stream"];
	$Hostel=@$_GET["hstl"];
	$Disable= "disabled='disabled'";
    $regd = 0;
    $regd1 = 0;
    $hmsg = "";
    $emsg ="";
    $amsg = "";
    $estatus = 1;
    $astatus = 1;
    $hstatus = 1;

	/*echo $Sem;
	echo $Stream;
	echo $Hostel;*/

	if (($Sem=="1st"||$Sem=="3rd"||$Sem=="5th"||$Sem=="7th"||$Sem=="9th")&&($Hostel=="yes")) {
		 
		 $Disable_File1="";
		 $Disable_File2="";
		 $Disable_File3="";
	}
	elseif (($Sem=="1st"||$Sem=="3rd"||$Sem=="5th"||$Sem=="7th"||$Sem=="9th")&&($Hostel=="no")) {
		 $Disable_File1="";
		 $Disable_File2="";
		 $Disable_File3="readonly";
	}
	elseif (($Sem=="2nd"||$Sem=="4th"||$Sem=="6th"||$Sem=="8th"||$Sem=="10th")&&($Hostel=="yes")) {
		 $Disable_File1="";
		 $Disable_File2="readonly";
		 $Disable_File3="";
	}
	elseif (($Sem=="2nd"||$Sem=="4th"||$Sem=="6th"||$Sem=="8th"||$Sem=="10th")&&($Hostel=="no")) {
		$Disable_File1="";
		 $Disable_File2=" readonly";
		 $Disable_File3=" readonly";
		}
		else{
			 $Disable_File1="";
			 $Disable_File2="";
			 $Disable_File3="";
		}



    if(isset($_POST["submit"])){

    	$regd = $_POST['regno'];
    	$name = $_POST['name1']; 
	    $branch = $_POST['branch']; 
	    $roll = $_POST['roll']; 
	    $sem = $_POST['sem1']; 
	    $stream = $_POST['str']; 
	    $phone = $_POST['phone']; 
	    $email = $_POST['email'];

       if(isset($_POST['submit']) && $_FILES['exam']['size'] > 0)
       {
              $fileName = $_FILES['exam']['name'];
              $destination = 'upload/' . $fileName;
               // get the file extension
			  $extension = pathinfo($fileName, PATHINFO_EXTENSION);

			    // the physical file on a temporary uploads directory on the server
			  $file = $_FILES['exam']['tmp_name'];
			  $size = $_FILES['exam']['size'];

/*			    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
			        $emsg = "You file extension must be .zip, .pdf or .docx";
			        $estatus = 0;
			    } elseif ($_FILES['exam']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
			        $emsg = "File too large!";
			        $estatus = 0;
	                $response = array(
			            "type" => "error",
			            "message" => "Image size exceeds 2MB"
			        );
			    } else {*/
		        // move the uploaded (temporary) file to the specified destination
		        if (move_uploaded_file($file, $destination)) {
		            $sql = "INSERT INTO exam_pdf (regd,filename,status) VALUES ('$regd','$fileName','OFF')";
		            if (mysqli_query($Connection, $sql)) {
		                $emsg="File uploaded successfully";		                	
		            }
		        } else {
		            $emsg="Failed to upload file.";
			        $estatus = 0;		            
		        }

         	 /*}
*/
       }



       if(isset($_POST['submit']) && $_FILES['acc']['size'] > 0)
       {
			  $fileName = $_FILES['acc']['name'];
              $destination = 'upload/' . $fileName;
               // get the file extension
			  $extension = pathinfo($fileName, PATHINFO_EXTENSION);

			    // the physical file on a temporary uploads directory on the server
			  $file = $_FILES['acc']['tmp_name'];
			  $size = $_FILES['acc']['size'];

			    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
			        $amsg= "You file extension must be .zip, .pdf or .docx";
			        $astatus = 0;
			    } elseif ($_FILES['acc']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
			        $amsg= "File too large!";
			        $astatus = 0;
			    } else {
		        // move the uploaded (temporary) file to the specified destination
		        if (move_uploaded_file($file, $destination)) {
		            $sql = "INSERT INTO account_pdf (regd,filename,status) VALUES ('$regd','$fileName','OFF')";
		            if (mysqli_query($Connection, $sql)) {
		                $amsg= "File uploaded successfully";
		            }
		        } else {
		            $amsg= "Failed to upload file.";
		            $astatus = 0;
		        }

          }
        }

       if(isset($_POST['submit']) && $_FILES['hstl']['size'] > 0)
       {
              $fileName = $_FILES['hstl']['name'];
              $destination = 'upload/' . $fileName;
               // get the file extension
			  $extension = pathinfo($fileName, PATHINFO_EXTENSION);

			    // the physical file on a temporary uploads directory on the server
			  $file = $_FILES['hstl']['tmp_name'];
			  $size = $_FILES['hstl']['size'];
			    if (!in_array($extension, ['zip', 'pdf', 'docx'])) 
			    {
			        $hmsg= "Your file extension must be .zip, .pdf or .docx";
			        $hstatus = 0;
			    } elseif ($_FILES['hstl']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
			    $hmsg= "Wrong Username or Password";
                $hstatus = 0;
			    } else {
		        // move the uploaded (temporary) file to the specified destination
		        if (move_uploaded_file($file, $destination)) {
		            $sql = "INSERT INTO hstl_pdf (regd,filename,status) VALUES ('$regd','$fileName','OFF')";
		            if (mysqli_query($Connection, $sql)) {
		                $hmsg= "File uploaded successfully";
		    		   /* header("Location:index4-1-2.php");
		    		    exit;*/
		            }
		        } 
		        else {
		            $hmsg= "Failed to upload file.";
                    $hstatus = 0;
		        }

               }

       }

           if($estatus==1 && $astatus == 1 && $hstatus == 1 )
		    {
		       
		        $sq = "insert into semester (regd,name,branch,roll,sem,stream,phone,email,dstatus) values ('$regd','$name','$branch','$roll','$sem','$stream','$phone','$email','OFF')";
		        $sql1 =mysqli_query($Connection,$sq) or die("unable to insert");

   	            header("Location:ajax/index2.php?regno=$regd");

		    }
   }

?>



<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style4.css">
		<script type="text/javascript">
			var uploadField = document.getElementsByClassName("file1");

			uploadField.onchange = function(){
				if(this.files[0].size > 307200){
					alert("File size is too high");
					this.value = "";
				};
			};
		</script>
	</head>
	<body>
		<div class="d-flex justify-content-center pt-3 text-success">
			<h3>Student Details</h3>
		</div>
		<div>
		<hr width="400px;">
		</div>

		<div>
		</div>

		<form action="" class="pt-5" method="post" enctype="multipart/form-data">
		  <div class="form-group form-inline ml-5 d-flex justify-content-center">
		    <label for="email" class="mr-5 col-sm-2">Registration No.:<span>&#42;</span>   </label>
		    <input type="text" class="form-control"  id="email" name="regno">
		  </div>
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Name:<span>&#42;</span>   </label>
		    <input type="text" class="form-control"  id="email" name="name1">
		  </div>		  
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Email address:<span>&#42;</span>   </label>
		    <input type="email" class="form-control"  id="email" name="email">
		  </div>
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Branch: <span>&#42;</span>   </label>
		    <input type="text" class="form-control"  id="email" name="branch">
		  </div>
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Semester:   </label>
		    <input type="text" class="form-control"  id="email" name="sem1" value="<?php echo $Sem ?>" readonly>
		  </div>
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Stream:   </label>
		    <input type="text" class="form-control " name="str"  id="email" value="<?php echo $Stream ?>" readonly>
		  </div>
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Phone Number: <span>&#42;</span>  </label>
		    <input type="text" class="form-control"  id="email" name="phone">
		  </div>
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Roll number:<span>&#42;</span></label>
		    <input type="number" class="form-control" id="email" name="roll">
		  </div>
		  <!-- <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Transaction Id:<span>&#42;</span></label>
		    <input type="text" class="form-control" id="email">
		  </div> -->
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >

		    <label for="email" class="mr-5 col-sm-2">Upload exam fee document:</label>
		    <input type="file" class="form-control file_upload1 file1"  id="file1" name="exam" <?php echo $Disable_File1 ?>>
		  </div>

		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Upload Academic fee document:</label>
		    <input type="file" class="form-control file_upload1"  id="file2" name="acc" <?php echo $Disable_File2 ?>>
		  </div>
		  <div class="form-group form-inline ml-5 d-flex justify-content-center" >
		    <label for="email" class="mr-5 col-sm-2">Upload Hostel fee document:</label>
		    <input type="file" class="form-control file_upload1"  id="file3" name="hstl" <?php echo $Disable_File3 ?>>
		  </div>

		  <div class=" form-group form-inline d-flex justify-content-center">
		          <button type="submit" class="btn btn-primary " name="submit">NEXT</button>
		  </div>


		</form>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
