<?php

include "navbar.php"; include "connection.php";
?>

<!DOCTYPE html>

<html>
 
<head>

<title>Feedback</title>

<link rel="stylesheet" type="text/css" href="style.css">

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function validate()
	{
	var first=document.getElementById("first");
	if(first.value.trim()=="")
		{
			//alert("the first name should not be empty");
			first.style.border="3px solid red";
			document.getElementById("firstmsg").style.visibility="visible";
			return false;
		}
		else
		{
			return true;
		}
	}
	</script>

<style type="text/css"> body
{

background-image: url("feedback.jpg");
background-size: cover;

}

.wrapper

{

padding: 10px; margin: -20px auto; width:900px; height: 600px;
background-color: grey; opacity: .8;
color: white;

}

.form-control
 
{

height: 70px; width: 60%;

}

.scroll

{
width: 100%; height: 300px; overflow: auto;

}

</style>

</head>

<body>

<div class="wrapper">

<h4>If you have any suggesions or questions please comment below.</h4>

<form style="" action=""onsubmit="return validate()" method="post">

<input class="form-control" type="text"id="first" name="comment" placeholder="Write
something...">
<label id="firstmsg" style="color:red;visibility:hidden;">*Invalid</label><br>

<input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">
</form>

<br><br>
 
<div class="scroll">

<?php

if(isset($_POST['submit']))

{

$sql="INSERT INTO `comments` VALUES('', 'Admin',
'$_POST[comment]');";

if(mysqli_query($db,$sql))

{

$q="SELECT * FROM `comments` ORDER BY `comments`.`id`
DESC";

$res=mysqli_query($db,$q);



echo "<table class='table table-bordered'>"; while ($row=mysqli_fetch_assoc($res))
{

echo "<tr>";

echo "<td >"; echo
"</td>";

echo "<td>"; echo $row['comment']; echo
"</td>";

echo "</tr>";

}

}

}

else
 
{

$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";

$res=mysqli_query($db,$q);

echo "<table class='table table-bordered'>"; while ($row=mysqli_fetch_assoc($res))
{

echo "<tr>";

echo "<td >"; echo $row['comment']; echo
"</td>";

echo "</tr>";

}

}

?>

</div>

</div>

</body>

</html>

