<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var to = $("#to").val();
				var msg = $("#msg").val();
				var url = "http://sms.businesssaathiplus.com/api/sendhttp.php?authkey=&mobiles=91"+to+"&message="+msg+"&sender=8349061881&route=4&country=91";
				alert(url);
				$.ajax({
					url : url,
					type : "get",
					crossDomain: true,
					dataType : "jsonp",
					success : function(res){
						console.log(res);
					}
				})
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<div class="form-group">
					<label>To</label>
					<input type="Text" id="to" class="form-control">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea class="form-control" id="msg"></textarea>
				</div>
				<button class="btn btn-primary">Send</button>
</body>
</html>