<?php
include("admin2.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="login3.css">
	</head>
	<body>
		<div class="login">
			<h1>Welcome Back Admin</h1>
		    <form method="post" action="">
		    	<input type="text" name="user" placeholder="Username"   />
		        <input type="password" name="pass" placeholder="Password" />
		        <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">Let me in.</button>
		    </form>
		    <span><?php echo $error; ?></span>
		</div>
	</body>
</html>