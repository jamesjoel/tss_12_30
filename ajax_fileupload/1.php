<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
	   //form Submit
	   $(document).ready(function(){

	   $("#myfrm").submit(function(e){	 
	      
	      e.preventDefault();

	       var fd = new FormData();
	       // console.log($("#file")[0].files[0]);

	       fd.append("myfile", $("#file")[0].files[0]);

	       // fd.append("age", $("#age").val());

			       
	       fd.append("f_name", $("#f_name").val());
	   $.ajax({
	       url: '2.php',
	       type: 'POST',
	       data: fd,
	       processData: false,
        	contentType: false,
	       success: function (response) {
	         alert(response);
	         // $("#up_img").css({"display" : "block"});
	         // $("#up_img").attr("src", response);

	       }
	   }); 
	   return false;
	 });
	   });
	</script>
</head>
<body>
	<form id="myfrm">
		Select File <input type="file" id="file" />
		<Br />
		<input type='text' name="f_name" id="f_name"/>
		<input type="submit" value="Upload">
	</form>
	<img src="" style="display: none;" id="up_img" height="200" width="200" />
</body>
</html>