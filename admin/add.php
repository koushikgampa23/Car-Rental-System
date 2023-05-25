<?php

include "connection.php"; include "navbar.php";
?>

<!DOCTYPE html>

<html>

<head>

<title>Car rentals</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style> body
{

background-color: #024629;
 
font-family: "Lato", sans-serif; transition: background-color .5s;
}

.sidenav

{

height: 100%; margin-top: 50px; width: 0; position: fixed;
z-index: 1;

top: 0;

left: 0;

background-color: #222; overflow-x: hidden; transition: 0.5s;
padding-top: 60px;

}



.sidenav a

{

padding: 8px 8px 8px 32px; text-decoration: none; font-size: 25px;
color: #818181;
 
display: block; transition: 0.3s;
}



.sidenav a:hover

{

color: #f1f1f1;

}



.sidenav .closebtn

{

position: absolute; top: 0;
right: 25px; font-size: 36px;
margin-left: 50px;

}


#main

{

transition: margin-left .5s; padding: 16px;
}


@media screen and (max-height: 450px)
 
{

.sidenav {padding-top: 15px;}

.sidenav a {font-size: 18px;}

}

.img-circle

{

margin-left: 20px;

}

.h:hover

{

color: white; width: 300px; height: 50px;
background-color: #00544c;



}

.car

{

width: 400px; margin: 0px auto;
}

.form-control

{

background-color: #080707; color: white;
 
height: 40px;

}

</style>
<script type="text/javascript">
	function validate()
	{
	var first=document.getElementById("first");
	var name=document.getElementById("name");
	var car_name=document.getElementById("car_name");
	var car_number=document.getElementById("car_number");
	var price=document.getElementById("price");
	var status=document.getElementById("status");
	var regxfirst=/^([a-zA-Z]+)$/;
	var regxprice=/^([0-9]+)$/;
	var regxnumber=/^([a-zA-Z0-9-]+)$/;
	if(first.value.trim()=="")
		{
			//alert("the first name should not be empty");
			first.style.border="3px solid red";
			document.getElementById("firstmsg").style.visibility="visible";
			return false;
		}
		else if(!regxprice.test(first.value))
		{
			first.style.border="3px solid red";
			document.getElementById("firstmsg").style.visibility="visible";
			document.getElementById("firstmsg").innerHTML="*Invalid car id";
			return false;
		}
		else if(name.value.trim()=="")
		{
			//alert("the first name should not be empty");
			name.style.border="3px solid red";
			document.getElementById("namemsg").style.visibility="visible";
			return false;
		}
		else if(!regxfirst.test(name.value))
		{
			name.style.border="3px solid red";
			document.getElementById("namemsg").style.visibility="visible";
			document.getElementById("namemsg").innerHTML="*Invalid driver name";
			return false;
		}
		if(car_name.value.trim()=="")
		{
			//alert("the first name should not be empty");
			car_name.style.border="3px solid red";
			document.getElementById("car_namemsg").style.visibility="visible";
			return false;
		}
		else if(!regxfirst.test(car_name.value))
		{
			car_name.style.border="3px solid red";
			document.getElementById("car_namemsg").style.visibility="visible";
			document.getElementById("car_namemsg").innerHTML="*Invalid car name";
			return false;
		}
		if(car_number.value.trim()=="")
		{
			//alert("the first name should not be empty");
			car_number.style.border="3px solid red";
			document.getElementById("car_numbermsg").style.visibility="visible";
			return false;
		}
		else if(!regxnumber.test(car_number.value))
		{
			car_number.style.border="3px solid red";
			document.getElementById("car_numbermsg").style.visibility="visible";
			document.getElementById("car_numbermsg").innerHTML="*Invalid car number";
			return false;
		}
		if(price.value.trim()=="")
		{
			//alert("the first name should not be empty");
			price.style.border="3px solid red";
			document.getElementById("pricemsg").style.visibility="visible";
			return false;
		}
		else if(!regxprice.test(price.value))
		{
			price.style.border="3px solid red";
			document.getElementById("pricemsg").style.visibility="visible";
			document.getElementById("pricetmsg").innerHTML="*Invalid price";
			return false;
		}
		if(status.value.trim()=="")
		{
			//alert("the first name should not be empty");
			status.style.border="3px solid red";
			document.getElementById("statusmsg").style.visibility="visible";
			return false;
		}
		else if(!regxfirst.test(status.value))
		{
			status.style.border="3px solid red";
			document.getElementById("statusmsg").style.visibility="visible";
			document.getElementById("statusmsg").innerHTML="*Invalid status";
			return false;
		}
		else
		{
			return true;
		}
	}
	</script>



</head>

<body>

<!---sidenav-->

<div id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



<div style="color: white; margin-left: 60px; font-size: 20px;">



<?php if(isset($_SESSION['login_user']))
{



echo "<img class='img-circle profile_img' height=120 width=120 src='icon.webp".$_SESSION['pic']."'>";
echo "</br></br>";

echo "Welcome ".$_SESSION['login_user'];

}

?>

</div><br><br>



<div class="h"><a href="add.php">Add Cars</a></div>

<div class="h"><a href="delete.php">Delete Cars</a></div>
 
<div class="h"><a href="#">Car Request</a></div>

<div class="h"><a href="feedback.php">Issue Information</a></div>


</div>

<div id="main">

<span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>

<div class="container" style="text-align: center;">

<h2 style="color: black; font-family: Lucida Console; text-align: center"><b>Add New Cars</b></h2>

<form class="car" onsubmit="return validate()" action="" method="post">

<input type="text" name="cid" id="first" class="form-control" placeholder="Car id" >
<label id="firstmsg" style="color:red;visibility:hidden;">*Should not be empty</label><br>

<input type="text" name="Driver name" id="name" class="form-control" placeholder="Driver name" >
<label id="namemsg" style="color:red;visibility:hidden;">*Should not be empty</label><br>

<input type="text" name="Car name" class="form-control" id="car_name" placeholder="Car name" >
<label id="car_namemsg" style="color:red;visibility:hidden;">*Should not be empty</label><br>

<input type="text" name="Car number" class="form-control" id="car_number" placeholder="Car number" >
<label id="car_numbermsg" style="color:red;visibility:hidden;">*Should not be empty</label><br>


<input type="text" name="Price" class="form-control" id="price" placeholder="Price" >
<label id="pricemsg" style="color:red;visibility:hidden;">*Should be empty</label><br>

<input type="text" name="Status" class="form-control" id="status" placeholder="Status" >
<label id="statusmsg" style="color:red;visibility:hidden;">*Should be empty</label><br>

<button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
 
</form>

</div>

<?php if(isset($_POST['submit']))
{

if(isset($_SESSION['login_user']))

{


mysqli_query($db,"INSERT INTO carrenting VALUES ( '$_POST[cid]', '$_POST[Driver_name]', '$_POST[Car_name]', '$_POST[Car_number]', '$_POST[Price]', '$_POST[Status]') ;");
?>

<script type="text/javascript"> alert("Car Added Successfully.");
</script>

<?php

}

else

{

?>

<script type="text/javascript"> alert("You need to login first.");
</script>

<?php

}

}
 

?>

</div>

<script>

function openNav()

{

document.getElementById("mySidenav").style.width = "300px"; document.getElementById("main").style.marginLeft = "300px"; document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}


function closeNav()

{
document.getElementById("mySidenav").style.width = "0";

document.getElementById("main").style.marginLeft= "0";

document.body.style.backgroundColor = "#024629";

}

</script>

</body>

