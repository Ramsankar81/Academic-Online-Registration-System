
<html>
	<head>
		<TITLE> Add/Remove dynamic rows in HTML table </TITLE>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style4.css">

		<script language="javascript">
			function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[0].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "checkbox":
							newcell.childNodes[0].checked = false;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}

		function deleterow(tableID) {
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;

    table.deleteRow(rowCount -1);
}
		</script>
	</head>
	<body>

		<button type="button" class="btn btn-outline-primary" onclick="addRow('dataTable')" >Add Row</button>
		<button type="button" class="btn btn-outline-primary" onclick="deleterow('dataTable')" >delete Row</button>
		<table class="table">
    <thead>
      <tr>
        <th  class="text-center">Firstname </th>
        <th  class="text-center">Lastname</th>
        <th  class="text-center">Email</th>
      </tr>
    </thead>
    
  </table>
		<table class="table" id="dataTable" width="350px" border="1">
		   <tbody>
					<tr>
						<td><input type="text" class="form-control" ></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
					</tr>
		  </table>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>