<html>
	<head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
		<script src="https://kit.fontawesome.com/92ca1cd8a9.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="../style4.css">

		<style>
			.nav-tabs li {
          margin-left: 50px; //use whatever you want
      } 
      body
        {
         margin:20;
         padding:0;
         background-color:#f1f1f1;
        }
        .box
        {
         width:1270px;
         padding:20px;
         background-color:#fff;
         border:1px solid #ccc;
         border-radius:5px;
         margin-top:25px;
         box-sizing:border-box;
        }
        .ram{
            background-color: #b8e1dd;
        }
        h2{
          color: #1b262c;
        }
		</style>
	</head>
	<body>
<div class="container">
  <div class="d-flex justify-content-center pt-3 text-success ram">
  <h2 style="text-align: center;">Indira Gandhi Institute Of Technology, Sarang</h2>
</div>
  

  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Exam Section</a></li>
    <li><a data-toggle="tab" href="#menu2">Account Section</a></li>
    <li><a data-toggle="tab" href="#menu3">Hostel Section</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
  <div class="container box">
   <h1 align="center">Exam Secton</h1>
   <br />
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info">Add</button>
    </div>
    <br />
    <div id="alert_message1"></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>USER NAME</th>
       <th>PASSWORD</th>
      <th></th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="container box">
   <h1 align="center">Account Section</h1>
   <br />
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" name="add2" id="add2" class="btn btn-info">Add</button>
    </div>
    <br />
    <div id="alert_message2"></div>
    <table id="user_data2" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>USER NAME</th>
       <th>PASSWORD</th>
      <th></th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <div class="container box">
   <h1 align="center">Hostel Section</h1>
   <br />
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" name="add3" id="add3" class="btn btn-info">Add</button>
    </div>
    <br />
    <div id="alert_message3"></div>
    <table id="user_data3" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>USER NAME</th>
       <th>PASSWORD</th>
      <th></th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
    </div>
  </div>
</div>
		</body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    }
   });
  }
  

  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data2"></td>';
    html += '<td contenteditable id="data3"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var sub_code = $('#data2').text();
   var sub_name = $('#data3').text();
   if( sub_code != '' && sub_name != '')
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{sub_code:sub_code, sub_name:sub_name},
     success:function(data)
     {
      $('#alert_message1').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message1').html('');
    }, 5000);
   }
   else
   {
    alert("ALl Fields is required");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message1').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message1').html('');
    }, 5000);
   }
  });
 });
</script>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data2();

  function fetch_data2()
  {
   var dataTable = $('#user_data2').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch2.php",
     type:"POST"
    }
   });
  }
  

  $('#add2').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data4"></td>';
    html += '<td contenteditable id="data5"></td>';
   html += '<td><button type="button" name="insert2" id="insert2" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data2 tbody').prepend(html);
  });
  
  $(document).on('click', '#insert2', function(){
   var sub_code = $('#data4').text();
   var sub_name = $('#data5').text();
   if( sub_code != '' && sub_name != '')
   {
    $.ajax({
     url:"insert2.php",
     method:"POST",
     data:{sub_code:sub_code, sub_name:sub_name},
     success:function(data)
     {
      $('#alert_message2').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data2').DataTable().destroy();
      fetch_data2();
     }
    });
    setInterval(function(){
     $('#alert_message2').html('');
    }, 5000);
   }
   else
   {
    alert("ALl Fields is required");
   }
  });
  
  $(document).on('click', '.delete2', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete2.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message2').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data2').DataTable().destroy();
      fetch_data2();
     }
    });
    setInterval(function(){
     $('#alert_message2').html('');
    }, 5000);
   }
  });
 });
</script>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data3();

  function fetch_data3()
  {
   var dataTable = $('#user_data3').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch3.php",
     type:"POST"
    }
   });
  }
  

  $('#add3').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data6"></td>';
    html += '<td contenteditable id="data7"></td>';
   html += '<td><button type="button" name="insert3" id="insert3" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data3 tbody').prepend(html);
  });
  
  $(document).on('click', '#insert3', function(){
   var sub_code = $('#data6').text();
   var sub_name = $('#data7').text();
   if( sub_code != '' && sub_name != '')
   {
    $.ajax({
     url:"insert3.php",
     method:"POST",
     data:{sub_code:sub_code, sub_name:sub_name},
     success:function(data)
     {
      $('#alert_message3').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data3').DataTable().destroy();
      fetch_data3();
     }
    });
    setInterval(function(){
     $('#alert_message3').html('');
    }, 5000);
   }
   else
   {
    alert("ALl Fields is required");
   }
  });
  
  $(document).on('click', '.delete3', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete3.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message3').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data3').DataTable().destroy();
      fetch_data3();
     }
    });
    setInterval(function(){
     $('#alert_message3').html('');
    }, 5000);
   }
  });
 });
</script>
