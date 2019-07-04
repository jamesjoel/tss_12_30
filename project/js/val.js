$(document).ready(function(){
	$("#signup-frm").submit(function(){
		var a = $("#full_name").val();
		var b = $("#username").val();
		var c = $("#pass").val();
		var d = $("#re_pass").val();
		var e = $("#add").val();
		var f = $("#city").val();
		var g = $("#contact").val();


		var h = $("#male").is(":checked");
		var i = $("#female").is(":checked");

		var j = $("#agree").is(":checked");


		var check = true;


		if(h==false && i == false)
		{
			check=false;
			$("#gender_msg").html("Select Your Gender");
		}
		else
		{
			$("#gender_msg").html("");

		}
		if(j==false)
		{
			check=false;
			$("#agree_msg").html("Please Check Terms and Condition !");

		}
		else
		{
			$("#agree_msg").html("");
		}


		if(a=="")
		{
			check=false;
			$("#full_name_msg").html("Insert Your Full Name");
		}
		else
		{
			$("#full_name_msg").html("");

		}

		if(b=="")
		{
			check=false;
			$("#username_msg").html("Insert Your Username/Email");
		}
		else
		{
			var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(reg.test(b)==false)
			{
				check=false;
				$("#username_msg").html("Your Email Id is not Correct !");
			}
			else
			{
				$("#username_msg").html("");
				
			}



		}
		if(c=="")
		{
			check=false;
			$("#pass_msg").html("Insert Your Password");
		}
		else
		{
			$("#pass_msg").html("");

		}
		if(d=="")
		{
			check=false;
			$("#re_pass_msg").html("Insert Your Re-Password");
		}
		else
		{
			if(c != d)
			{
				
				$("#re_pass_msg").html("Insert Your Re-Password and Password not same");
			}
			else{
				$("#re_pass_msg").html("");
				
			}

		}
		if(e=="")
		{
			check=false;
			$("#add_msg").html("Insert Your Full Address");
		}
		else
		{
			$("#add_msg").html("");

		}
		if(f=="Select")
		{
			check=false;
			$("#city_msg").html("Select Your City");
		}
		else
		{
			$("#city_msg").html("");

		}
		if(g=="")
		{
			check=false;
			$("#contact_msg").html("Insert Your Contact Number");
		}
		else
		{
			if(isNaN(g)==true)
			{
				check=false;
				$("#contact_msg").html("Insert Number Only");
			}
			else
			{
				var n = g.length;
				if(n >= 13 || n < 10)
				{
					check=false;
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