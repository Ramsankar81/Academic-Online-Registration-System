<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="../js/typed.js"></script>

		<style>
			.vertical-center-row {
		    padding-top: 250px;
		}
		.text-center{

		}
		.rtop{
			padding-top: 150px;
		}
		.span{
			padding: 100px;
		}
		.k1,.k2,.k3{
			/*background-image: url('../image/bg5.jpg');*/
			background-color: white;
			 background-size: 100%;
			 background-repeat: no-repeat;
			 background-size: cover;
			 color: white;
			 font-family: 'Anton', sans-serif;

		}
		.elements{
			margin-top: 50px;
			color: #f5fcc1;
			
		}
		p{
			
		}
		a{
			text-decoration: none;
		}
		body{
			background-image: url('../image/bg3.jpg');
			background-size: cover;
		}
		</style>
	</head>
	<body>
		<div class="d-flex justify-content-center elements ">
		<h2 >Welcome To <span class="element"></span> </h2>
		</div>
	<div class="container h-100">
  <div class="d-flex justify-content-center  mb-3 rtop">
    <div class=" bg-dark k2 m-3 span " onclick="location.href='../login3-1.php';" style="cursor:pointer;"><h2>Exam Section</h2></div>
    <div class=" bg-dark k2 m-3 span" onclick="location.href='../login3-2.php';" style="cursor:pointer;"><h2>Account Section</h2></div>
    <div class=" bg-dark k3 m-3 span" onclick="location.href='../login3-3.php';" style="cursor:pointer;"><h2>Hostel Section</h2></div>
  </div>
</div>
		<script>
			var typed = new Typed('.element', {
			  strings: ['Indira Gandhi Institute Of Technology,Sarang', 'Computer Science And Engineering Department '], // Default value
			   loop: true,
			   stringsElement: null,
		// typing speed
		typeSpeed: 50,
		// time before typing starts
		startDelay: 600,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		// false = infinite
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|"
		// attribute to type (null == text)
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>