<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#filePHOTO").change(function(){
$("#file_error").html("");
$(".file_upload1").css("border-color","#F0F0F0");
var file_size = $('#filePHOTO')[0].files[0].size;
if(file_size>300000) {
$("#file_error").html("<p style='color:#FF0000'>File size is greater than 300kb</p>");
$(".file_upload1").css("border-color","blue");
return false;
} 
return true;
});
});
</script>
</head>
<body>
<span id="file_error"></span>
<input type="file" id="filePHOTO" name="file_upload1" class="file_upload1">
</body>
</html>
		