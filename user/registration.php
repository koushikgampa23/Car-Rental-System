

<?php

include "connection.php"; include "navbar.php";
?>

<!DOCTYPE html>

<html>

<head>


<title>user registration</title>

<link rel="stylesheet" type="text/css" href="style.css">

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
function validate()
	{
		var first=document.getElementById("first");
		var last = document.getElementById("last");
		var email = document.getElementById("email");
		var userid = document.getElementById("userid");
		var pwd = document.getElementById("password");
		var regxfirst=/^([a-zA-Z]+)$/;
		var regxlast=/^([a-zA-Z]+)$/;
		var regxemail=/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-zA-Z]{2,8})(.[a-zA-Z]{2,8})$/;
		var regxnumber=/^[7-9][0-9]{9}$/;
		if(first.value.trim()=="")
		{
			//alert("the first name should not be empty");
			first.style.border="3px solid red";
			document.getElementById("firstmsg").style.visibility="visible";
			return false;
		}
		else if(!regxfirst.test(first.value))
		{
			first.style.border="3px solid red";
			document.getElementById("firstmsg").style.visibility="visible";
			document.getElementById("firstmsg").innerHTML="*Invalid First name";
			return false;
		}
		else if(last.value.trim()=="")
		{
			//alert("The last name should not be empty");
			last.style.border="3px solid red";
			document.getElementById("lastmsg").style.visibility="visible";
			return false;
		}
		else if(!regxlast.test(last.value))
		{
			last.style.border="3px solid red";
			document.getElementById("lastmsg").style.visibility="visible";
			document.getElementById("lastmsg").innerHTML="*Invalid Last name";
			return false;
		}
		else if(userid.value.trim()=="")
		{
			//alert("The UserId should not be empty");
			userid.style.border="3px solid red";
			document.getElementById("idmsg").style.visibility="visible";
			return false;
		}
		else if(pwd.value.trim()=="")
		{
			//alert("The Password should not be empty");
			pwd.style.border="3px solid red";
			document.getElementById("pwdmsg").style.visibility="visible";
			return false;
		}
		else if(number.value.trim()=="")
		{
			number.style.border="3px solid red";
			document.getElementById("numbermsg").style.visibility="visible";
			return false;
		}
		else if(!regxnumber.test(number.value))
		{
			number.style.border="3px soild red";
			document.getElementById("numbermsg").style.visibility="visible";
			document.getElementById("numbermsg").innerHTML="*The must start with 7,8,9 and should not contain char and it should be exactly 10 digits";
			return false;
		}
		
		
		else if(email.value.trim()=="")
		{
			//alert("The email should not be empty");
			email.style.border="3px soild red";
			document.getElementById("emailmsg").style.visibility="visible";
			return false;
		}
		else if(!regxemail.test(email.value))
		{
			email.style.border="3px solid red";
			document.getElementById("emailmsg").style.visibility="visible";
			document.getElementById("emailmsg").innerHTML="*Invalid EmailId";
			return false;
		}
		else
		{
			return true;
		}
	}
	</script>
 
<style type="text/css"> section
{

margin-top: -20px;

}

</style>

</head>

<body>


<section>


<div class="reg_img">


<div class="box2">

<br><br><br><br>

<h1 style="text-align: center; font-size: 35px;">CAR RENTING</h1>

<h1 style="text-align: center;font-size: 25px;">User registration form</h1>


<form name="Registration" onsubmit="return validate()" action="" method="post">


<div class="login">

<input class="form-control" type="text" name="first" id="first" placeholder="First Name">
<label id="firstmsg" style="color:red;visibility:hidden;">*Invalid</label><br>

<input class="form-control" type="text" name="last" id="last" placeholder="Last Name" >
<label id="lastmsg" style="color:red;visibility:hidden;">*Empty</label><br>

<input class="form-control" type="text" name="username" id="userid" placeholder="username">
<label id="idmsg" style="color:red;visibility:hidden;">*Empty</label><br>


<input class="form-control" type="password" name="password" id="password" placeholder="Password">
<label id="pwdmsg" style="color:red;visibility:hidden;">*Empty</label> <br>
 
<input class="form-control" type="text" name="contact" id="number" placeholder="Contact">
<label id="numbermsg" style="color:red;visibility:hidden">*Empty</label><br>


<input class="form-control" type="text" name="email" id="email" placeholder="Email">
<label id="emailmsg" style="color:red;visibility:hidden;">*Empty</label><br>



<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
</form>


</div>


</div>

</section>


<?php


if(isset($_POST['submit']))

{

$count=0;

$sql="SELECT username from `user`";

$res=mysqli_query($db,$sql);


while($row=mysqli_fetch_assoc($res))

{

if($row['username']==$_POST['username'])

{

$count=$count+1;

}
 
}

if($count==0)

{

mysqli_query($db,"INSERT INTO `user` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[contact]', '$_POST[email]', 'q.png');");
?>

<script type="text/javascript"> alert("Registration successful");
</script>

<?php

}

else

{


?>

<script type="text/javascript"> alert("The username already exist.");
</script>

<?php


}


}


?>

</body>

</html>
