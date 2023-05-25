

<?php

include "connection.php"; include "navbar.php";
?>

<!DOCTYPE html>

<html>
 
<head>


<title>Change Password</title>

<style type="text/css"> body
{

height: 650px;


background-image: url("unlock2.jpg");
background-size:cover;
}

.wrapper

{

width: 400px; height:400px; margin:100px auto; background-color: #1e1919; opacity: .8;
color: white; padding: 27px 15px;

}

.form-control

{

width: 300px;

}

</style>

</head>

<body>
 
<div class="wrapper">

<div style="text-align: center;">


<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password</h1>


</div>

<div style="padding-left: 30px">

<form action="" method="post">
<input type="text" name="Username" class="form-control" placeholder="Username" required=""><br>
<input type="text" name="Email" class="form-control" placeholder="Email" required=""><br>
<input type="text" name="Password" class="form-control" placeholder="New Password" required=""><br>
<button class="btn btn-default" type="submit" name="submit">Update</button>


</form></div>

</div>

<?php


if(isset($_POST['submit']))

{
if(mysqli_query($db,"UPDATE user SET Password='$_POST[Password]' WHERE Username='$_POST[Username]' AND Email='$_POST[Email]';"))
{

?>

<script type="text/javascript"> alert("The password updated successfully");
 
</script>

<?php

}

}

?>

</body>

</html>

