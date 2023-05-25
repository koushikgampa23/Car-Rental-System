

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

background-color: #024629; font-family: "Lato", sans-serif; transition: background-color .5s;
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
color: #818181; display: block; transition: 0.3s;
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

<h2 style="color: black; font-family: Lucida Console; text-align: center"><b>Delete Cars</b></h2>

<form class="car" action="" method="post">

<input type="text" name="Driver name" class="form-control" placeholder="Driver name" required=""><br>


<input type="text" name="Car name" class="form-control" placeholder="Car name" required=""><br>
 
<input type="text" name="Car number" class="form-control" placeholder="Car number" required=""><br>


<input type="text" name="Status" class="form-control" placeholder="Status" required=""><br>




<button style="text-align: center;" class="btn btn-default" type="submit" name="submit">DELETE</button>

</form>

</div>

<?php if(isset($_POST['submit']))
{

if(isset($_SESSION['login_user']))

{

mysqli_query($db,"DELETE FROM carrenting WHERE ('$_POST[Driver_name]', '$_POST[Car_name]', '$_POST[Car_number]', '$_POST[Status]') ;");

?>

<script type="text/javascript"> alert("Car Deleted Successfully.");
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


