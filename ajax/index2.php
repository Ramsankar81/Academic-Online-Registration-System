<?php require_once("../include/DB.php") ?>
<?php require_once("../include/Session.php") ?>
<?php
  $reg = $_GET["regno"];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet"  href="../style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="margin: auto;width: 60%;">
<form id="form1" subname="form1" method="post">
<div class="form-group">
<label for="subcode">Subject Code:</label>
<input type="text" subname="ssubname" class="form-control" id="subcode">
</div>
<div class="form-group">
<label for="pwd">Subject Name:</label>
<input type="text" subname="subcode" class="form-control" id="subname">
</div>
<input type="button" subname="send" class="btn btn-primary" value="add data" id="butsend">
<input type="button" subname="save" class="btn btn-primary" value="Save" id="butsave">
</form>
<table id="table1" subname="table1" class="table table-bordered">
<tbody>
<tr>
<th>ID</th>
<th>Subject Code</th>
<th>Subject Name</th>
<th>Action</th>
<tr>
</tbody>
</table>
</div>
<script>
$(document).ready(function() {
var id = 1; 
/*Assigning id and class for tr and td tags for separation.*/
$("#butsend").click(function() {
var newid = id++; 
$("#table1").append('<tr valign="top" id="'+newid+'">\n\
<td width="100px" >' + newid + '</td>\n\
<td width="100px" class="subcode'+newid+'">' + $("#subcode").val() + '</td>\n\
<td width="100px" class="subname'+newid+'">' + $("#subname").val() + '</td>\n\
<td width="100px"><a href="javascript:void(0);" class="remCF">Remove</a></td>\n\ </tr>');
});
$("#table1").on('click', '.remCF', function() {
$(this).parent().parent().remove();
});
/*crating new click event for save button*/
$("#butsave").click(function() {
var lastRowId = $('#table1 tr:last').attr("id"); /*finds id of the last row inside table*/
var subname = new Array(); 
var subcode = new Array();
for ( var i = 1; i <= lastRowId; i++) {
subname.push($("#"+i+" .subname"+i).html()); /*pushing all the subnames listed in the table*/
subcode.push($("#"+i+" .subcode"+i).html()); /*pushing all the subcodes listed in the table*/
}
var sendsubname = JSON.stringify(subname); 
var sendsubcode = JSON.stringify(subcode);
var reg= "<?php echo $reg ?>";
$.ajax({
url: "insert-ajax2.php",
type: "post",
data: {reg:reg, subname : sendsubname , subcode : sendsubcode},
success : function(data){
alert(data); /* alerts the response from php.*/
}
});
});
});
</script>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
		    <br>
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
</body>
</html>