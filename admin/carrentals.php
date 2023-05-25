

<?php

include "connection.php"; include "navbar.php";
?>

<!DOCTYPE html>

<html>

<head>

<title>Car rentals</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body

{

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

.srch

{

padding-left: 1200px;

}

</style>



</head>

<body>

<!---sidenav-->

<div id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



<div style="color: white; margin-left: 60px; font-size: 20px;">



<?php
 
if(isset($_SESSION['login_user']))

{



echo "<img class='img-circle profile_img' height=120 width=120 src='icon.webp".$_SESSION['pic']."'>";
echo "</br></br>";

echo "Welcome ".$_SESSION['login_user'];

}

?>

</div><br><br>



<div class="h"><a href="add.php">Add Cars</a></div>



<div class="h"><a href="request.php">Car Request</a></div>

<div class="h"><a href="feedback.php">Issue Information</a></div>


</div>

</div>



<div id="main">



<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>




<script>

function openNav()
 
{

document.getElementById("mySidenav").style.width = "300px"; document.getElementById("main").style.marginLeft = "300px"; document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}



function closeNav()

{

document.getElementById("mySidenav").style.width = "0";

document.getElementById("main").style.marginLeft= "0"; document.body.style.backgroundColor = "white";
}

</script>



<!-- 	delete bar 	-->



<div class="srch">

<form class="navbar-form" method="post" name="form1">



<input class="form-control" type="text" name="cid" placeholder=" Enter Car Id" required="">

<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn- default">Delete


</button>

</form>
 
</div>



<h2><b>List of cars</b></h2>

<?php



{

$res=mysqli_query($db,"SELECT * FROM `carrenting` ORDER BY cid ASC;");

echo "<table class='table table-bordered table-hover'>"; echo "<tr style='background-color: #6db6b9e6;'>";
//table header

echo "<th>"; echo "ID"; echo "</th>";

echo "<th>"; echo "Driver name"; echo "</th>"; echo "<th>"; echo "Car name"; echo "</th>"; echo "<th>"; echo "Car number"; echo "</th>";
echo "<th>"; echo "Price"; echo "</th>";

echo "<th>"; echo "Status"; echo "</th>"; echo "</tr>";


while($row=mysqli_fetch_assoc($res))

{

echo "<tr>";



echo "<td>"; echo $row['cid']; echo "</td>";

echo "<td>"; echo $row['Driver_name']; echo "</td>";

echo "<td>"; echo $row['Car_name']; echo "</td>";
 
echo "<td>"; echo $row['Car_number']; echo "</td>"; echo "<td>"; echo $row['Price']; echo "</td>";
 echo "</td>";
echo "<td>"; echo $row['Status']; echo "</td>";

echo "</tr>";

}

echo "</table>";

}



if(isset($_POST['submit']))

{

if(isset($_SESSION['login_user']))

{

mysqli_query($db,"DELETE from carrenting where cid = '$_POST[cid]'; ");
mysqli_query($db,"SELECT * FROM `carrenting` ORDER BY ID ASC;");


?>

<script type="text/javascript"> alert("Please refresh to finish the Task.");
</script>

<?php

}

else

{

?>

<script type="text/javascript"> alert("Please Login First.");
</script>
 
<?php

}

}




?>




</div>

</body>

</html>

