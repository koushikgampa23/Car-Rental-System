<?php


session_start();

?>

<!DOCTYPE html>

<html>

<head>


<title>

Online car renting System

</title>

<link rel="stylesheet" type="text/css" href="style.css">

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


<style type="text/css">

nav

{

float: right;

word-spacing: 30px; padding: 10px;
}

nav li

{

display: inline-block;
 
line-height: 80px;

}

</style>


</head>


<body>

<div class="wrapper">

<header>

<div class="logo">

<img src="carlogo.png" width="150px" heigth="200px">

<h1 style="color: white;">ONLINE CAR RENTING SYSTEM</h1>

</div>

<?php if(isset($_SESSION['login_user']))
{

?>

<nav>

<ul>

<li><a href="index.php">HOME</a></li>

<li><a href="carrentals.php">CAR-RENTALS</a></li>

<li><a href="logout.php">USER-LOGOUT</a></li>

<li><a href="feedback.php">FEEDBACK</a></li>

</ul>

</nav>

<?php

}

else
 
{

?>

<nav>

<ul>

<li><a href="index.php">HOME</a></li>

<li><a href="carrentals.php">CAR-RENTALS</a></li>

<li><a href="user_login.php">USER-LOGIN</a></li>

<li><a href="feedback.php">FEEDBACK</a></li>

</ul>

</nav>

<?php

}

?>


</header>

<section>

<div class="sec_img">

<br><br><br>

<div class="box">

<br><br><br><br>

<h1 style="text-align: center; font-size: 35px;">CAR RENTING</h1><br><br>

<h1 style="text-align: center;font-size: 25px;">24 HOURS!!</h1><br>

<h1 style="text-align: center;font-size: 25px;">SERVICE</h1><br>

</div>

</div>

</section>

<footer>

<p style=" color:white;text-align: center; ">
 
<br><br>

Email:&nbsp Online.carrenting@gmail.com <br><br> Mobile:&nbsp +76599********
</footer>


</div>


</body>


</html>

