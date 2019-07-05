$(document).ready(function(){
	$('#form').submit(function(){
	var a=$("#full_name").val();
	var b=$("#username").val();
	var c=$("#password").val();
	var d=$("#re_password").val();
	var e=$("#address").val();
	var f=$("#city").val();
	var g=$("#contact").val();

var check=true;
if(a=="")
{
	check=false;
	$("#msg_name").html("insert full name");
}
else
{
	$("#msg_name").html("");
}
if(b=="")
{
	check=false;
	$("#msg_user").html("insert full name");
}
else
{
	$("#msg_user").html("");
}
if(c=="")
{
	check=false;
	$("#msg_pass").html("insert password");
}
else
{
	$("#msg").html("");
}
if(d=="")
{
	check=false;
	$("#msg_re_pass").html("retype password");
}
else
{
if(c!=d)
{
	check=false;
	$("#msg_re_pass").html("insert same password");
}
else
{
	$("#msg").html("");
}
}


return check;




	});
});