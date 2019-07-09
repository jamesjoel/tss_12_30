$(document).ready(function(){
	$("#add_pro").submit(function(){
		var a = $("#pro_name").val();
		var b = $("#pro_image").val();
		var c = $("#pro_cat").val();
		var d = $("#pro_price").val();
		var e = $("#pro_dis").val();
		var f = $("#pro_detail").val();
		var check=true;
		if(a=="")
		{   
			check=false;
			$("#pro_name_msg").html("enter product name");
		}
		else{
			$("#pro_name_msg").html("");
		}
		if(b=="")
		{
			check=false;
			$("#pro_image_msg").html("set product image");
		}
		else{
			$("#pro_image_msg").html("");
		}
		if(c=="Select")
		{
			check=false;
			$("#pro_cat_msg").html("enter category name");
		}
		else{
			$("#pro_cat_msg").html("");
		}
		if(d=="")
		{
			check=false;
			$("#pro_price_msg").html("enter product price");
		}
		else{
			$("#pro_price_msg").html("");
		}

		if(e=="")
		{
			check=false;
			$("#pro_dis_msg").html("enter product Discount");
		}
		else{
			$("#pro_dis_msg").html("");
		}
		if(f=="")
		{
			check=false;
			$("#pro_detail_msg").html("enter product Detail");
		}
		else{
			$("#pro_detail_msg").html("");
		}
		return check;
	
	});
});