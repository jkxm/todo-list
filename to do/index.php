<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	<div class = "topBar">	<!--search bar-->
		<input class ="center" type="text" name="taskAdd" id = "taskAdd" onkeydown= "if(event.keyCode == 13){ addTask(); this.value = ''; return false; }" >
		<button onclick="addTask()">Add</button>
	</div>
	<table id = "taskList"> <!-- empty table to be filled by JS-->
		

	</table>
	</div>

<script type="text/javascript">
		function addTask() {
			var element = document.getElementById("taskList"); //table to be filled
			var row = document.createElement("tr"); //create new row 
			row.id = document.getElementById("taskAdd").value + "_"; //assign id to newly made table row
			var item = document.createElement("td"); // 

			item.innerHTML = document.getElementById("taskAdd").value; // the the td with the task 
			

			var done = document.createElement("td"); //created new td for the delete row
			var x = document.createTextNode("X");
			var task = document.getElementById("taskAdd").value;
			done.id = document.getElementById("taskAdd").value; //assign id of td as the task 
			
			done.onclick = function(){ //if x is clicked, then this function deletes the entire row
				var parent = this.parentElement.parentElement;
				parent.removeChild(row);
			}
			done.appendChild(x); // placed  'X' inside done td

			row.appendChild(item); //put both td items within the var row.
			row.appendChild(done);

			element.appendChild(row); //append row to the table
		}
			
	</script>

</body>
</html>
