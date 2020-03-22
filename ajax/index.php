<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="margin: auto;width: 60%;">
<form id="form1" name="form1" method="post">
<div class="form-group">
<label for="subname">Registration No:</label>
<input type="text" name="sname" class="form-control" id="regno">
</div>
<div class="form-group">
<label for="subname">Subject Code:</label>
<input type="text" name="sname" class="form-control" id="subcode">
</div>
<div class="form-group">
<label for="pwd">Subject Name:</label>
<input type="text" name="subname" class="form-control" id="subname">
</div>
<input type="button" name="send" class="btn btn-primary" value="add data" id="butsend">
<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
</form>
<table id="table1" name="table1" class="table table-bordered">
<tbody>
<tr>
<th>ID</th>
<th>Registration No</th>
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
<td width="100px" class="name'+newid+'">' + $("#regno").val() + '</td>\n\
<td width="100px" class="name'+newid+'">' + $("#subcode").val() + '</td>\n\
<td width="100px" class="subname'+newid+'">' + $("#subname").val() + '</td>\n\
<td width="100px"><a href="javascript:void(0);" class="remCF">Remove</a></td>\n\ </tr>');
});
$("#table1").on('click', '.remCF', function() {
$(this).parent().parent().remove();
});
/*crating new click event for save button*/
$("#butsave").click(function() {
var lastRowId = $('#table1 tr:last').attr("id"); /*finds id of the last row inside table*/
var regno = new Array();
var subcode = new Array(); 
var subname = new Array();
for ( var i = 1; i <= lastRowId; i++) {
regno.push($("#"+i+" .regno"+i).html()); /*pushing all the name listed in the table */
subcode.push($("#"+i+" .subcode"+i).html()); /*pushing all the names listed in the table*/
subname.push($("#"+i+" .subname"+i).html()); /*pushing all the subnames listed in the table*/
}
var sendRegno =JSON.stringify(regno);
var sendSubcode= JSON.stringify(subcode); 
var sendSubname = JSON.stringify(subname);
$.ajax({
url: "insert-ajax.php",
type: "post",
data: {regno:sendRegno,subcode : sendSubcode , subname : sendSubname},
success : function(data){
alert(data); /* alerts the response from php.*/
}
});
});
});
</script>
</body>
</html>