<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"src="jquery.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
		
				get_all_data();
				$("#add_btn").click(function(){
					var a = $("#name").val();
					var b = $("#age").val();

					$.ajax({
						url : "add_data.php",
						type : "post",
						data : { st_name : a, st_age : b },

						success : function(){
							$("#tab").html("");
							get_all_data();
							$("#name").val("");
							$("#age").val("");
						}

					});
				});
				
			});


			function get_all_data()
			{
				$.ajax({
					url : "get_sdata.php",
					type : "get",
					dataType : "json",
					success : function(res){
						// alert(res);

						// console.log(res);
						res.forEach(function(x, i){
							var tr = document.createElement("tr");
							var td0 = document.createElement("td");
							var td1 = document.createElement("td");
							var td2 = document.createElement("td");

							console.log(x.name);
							td0.innerHTML= i+1;
							td1.innerHTML =x.student_name;
							td2.innerHTML =x.age;

							tr.appendChild(td0);
							tr.appendChild(td1);
							tr.appendChild(td2);

							document.getElementById("tab").append(tr);

						});
					}
				});
			}






	

	</script>

</head>
<body>
<div style="margin: 10px auto; width: 400px; text-align: center; background-color: #CCC; min-height: 100px; padding: 10px;">
	<h2>Add New Student</h2>
	<input type="Text" id="name" placeholder="Student Name">
	<Br />
	<Br />
	<input type="Text" id="age" placeholder="Student Age">
	<Br />
	<Br />
	<button id="add_btn">Add</button>
</div>
<Br />

<table  align="center" border="1" width="400">
	<tr>
		<td>S.No.</td>
		<td>Name</td>
		<td>Age</td>
	</tr>
	<tbody id="tab">
	</tbody>
</body>
</html>