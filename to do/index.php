<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	<div class = "topBar">	
		<input class ="center" type="text" name="taskAdd" id = "taskAdd" onkeydown= "if(event.keyCode == 13){ addTask(); this.value = ''; return false; }" >
		<button onclick="addTask()">Add</button>
	</div>
	<table id = "taskList">
		

	</table>
	</div>

<script type="text/javascript">
		function addTask() {
			var element = document.getElementById("taskList");
			var row = document.createElement("tr");
			row.id = document.getElementById("taskAdd").value + "_";
			var item = document.createElement("td");

			item.innerHTML = document.getElementById("taskAdd").value;
			

			var done = document.createElement("td");
			var x = document.createTextNode("X");
			var task = document.getElementById("taskAdd").value;
			done.id = document.getElementById("taskAdd").value;
			
			done.onclick = function(){
				var parent = this.parentElement.parentElement;
				parent.removeChild(row);
			}
			done.appendChild(x);

			row.appendChild(item);
			row.appendChild(done);

			element.appendChild(row);
		}
			
	</script>

</body>
</html>