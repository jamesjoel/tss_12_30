$(document).ready(function(){
	$("#signup_frm").submit(function(){
		var a = $("#full_name").val();
		var b = $("#username").val();
		var c = $("#pass").val();
		var d = $("#re_pass").val();
		var e = $("#add").val();
		var f = $("#city").val();
		var g = $("#contact").val();

		var h =$("#male").is(":checked");
		var i =$("#female").is(":checked");
		var j =$("#agree").is(":checked");


		var check = true;
		if(h== false && i == false)
		 {  check = false;
			$("#gender_msg").html("Select Your Gender");
		}
		else{
			$("#gender_msg").html("");
		}
		if(j== false) {
			check = false;
			$("#agree_msg").html("please check term $ conditons!");
		}
		else{
			$("#agree_msg").html("");
		}

		if(a=="")
		{ check = false;
			$("#full_name_msg").html("enter your full Name");
		}
		else{
			$("#full_name_msg").html("");
		}
		if(b=="")
		{   check = false;
			$("#username_msg").html("enter your user Name/Email id");
		}
		else{
			var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				if(reg.test(b)==false)
				{
					$("#username_msg").html("Your Email Id is not Correct !");
				}
				else{
					$("#username_msg").html("");
				}
			
			}
		if(c=="")
		{   check = false;
			$("#pass_msg").html("enter your valid password");
		}
		else{
			$("#pass_msg").html("");
		}
		if(d=="")
		{   check = false;
			$("#re_pass_msg").html("enter your valid Re password");
		}
		else{
			if(c!=d)
			{ check = false;
			$("#re_pass_msg").html(" your password $ Re password not same!");	
			}
			else{
				$("#re_pass_msg").html("");
			}
			
		}
		if(e=="")
		{    check = false;
			$("#add_msg").html("enter your Address");
		}
		else{
			$("#add_msg").html("");
		}
		if(f=="Select")
		{    check = false;
			$("#city_msg").html("enter your city name");
		}
		else{
			$("#city_msg").html("");
		}
		if(g=="")
		{   check = false;
			$("#contact_msg").html("enter your contact no");
		}
		else{
			if(isNaN(g)==true)
			{   check = false;
				$("#contact_msg").html("enter Numbers Only");
			}
		else{
			var n =g.length;
			if(n>=13 || n<10)
			{   check = false;
				$("#contact_msg").html("Contact Number Length Should be 10 to 13 Digit");
			}
			else{
				$("#contact_msg").html("");
			}
		
			
		}
		}




			return check;
	});
	
});