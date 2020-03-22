<?php require_once("../include/DB.php") ?>
<?php require_once("../include/Session.php") ?>
<?php 
 if (isset($_POST['submit'])) {
 			require 'include/Exception.php';
 			require 'include/PHPMailer.php';
 			require 'include/SMTP.php';
 			
 			use PHPMailer\PHPMailer\PHPMailer;
 			use PHPMailer\PHPMailer\SMTP; 
			use PHPMailer\PHPMailer\Exception; 
			// require 'vendor/autoload.php'; 
			$mail = new PHPMailer(true); 
			  
			try { 
			    $mail->SMTPDebug = 2;                                        
			    $mail->isSMTP();                                             
			    $mail->Host       = 'smtp.gmail.com;';                     
			    $mail->SMTPAuth   = true;                              
			    $mail->Username   = '54ramsankar@gmail.com';                  
			    $mail->Password   = 'Ramsankar@81';                         
			    $mail->SMTPSecure = 'tls';                               
			    $mail->Port       = 587;   
			  
			    $mail->setFrom('54ramsankar@gmail.com', 'RAM');            
			    $mail->addAddress('hazraramsankar@gmail.com', 'HAZRA'); 
			       
			    $mail->isHTML(true);                                   
			    $mail->Subject = 'dfdgdgd'; 
			    $mail->Body    = 'HTML message body in <b>bold</b> '; 
			    $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
			    $mail->send(); 
			    echo "Mail has been sent successfully!"; 
			} catch (Exception $e) { 
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
			}
			} 
			  
			?> 
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../style4.css">
	</head>
	<body>
		<div class="d-flex justify-content-center pt-3 text-success">
			<h3>Add Information About Registration</h3>
		</div>
		<div>
		<hr width="700px;">
		</div>
		 <div>
               <?php echo Message(); ?>
     	</div>
		<form action="" method="post">
		  <div class="form-group">
			  <label for="comment">Mailer:</label>
			  <textarea class="form-control" rows="5" id="comment" name="msg"></textarea>
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