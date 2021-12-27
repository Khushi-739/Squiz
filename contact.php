<!doctype html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kunaldb2";

$connect = mysqli_connect($servername , $username , $password , $dbname);
if($connect)
{
     // echo "Connect okay";
}
else
{
     // echo "Connection failed" . mysqli_connect_error();
}

?>
<html> 
 <head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Three.js app</title> 
  <link href="contact.css" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500&amp;family=Creepster&amp;family=Metal+Mania&amp;family=Special+Elite&amp;display=swap" rel="stylesheet"> 
  <script ="https://kit.fontawesome.com/fe68ff178d.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/3b1ff797e0.js" crossorigin="anonymous"></script>
 </head> 
 <body> 
   
  <header> 
   <ul class="nav" >
    <li><a href="index.php">HOME</a></li> 
    <li><a href="character.php">CHARACTER</a></li> 
    <li><a href="plot.php">PLOT</a></li> 
    <li><a href="contact.php">CONTACT US</a></li> 
   </ul>
  </header> 
	 
<image src="ssk.jpeg" class="img"></image>
	<div class="form">
<form class="hpp" action="contact.php" method="get">
<h3 class="skd"> ANIME <nobr><nobr>FREAK </h3>
<div class="vrut">
CHOOSE AN AMAZING NAME<br><input type="text" name="username" required></input>
<br><br>
ENTER YOUR EMAIL ADDRESS<br><input type="email" name="email" required></input>
<br><br>
ENTER YOUR PASSWORD<br><input type="password" name="password"required></input>
<br><br>
RATE OUR WORK<br>
 EXCELLENT<input type="radio" name="gender" value="m" required></input>
 GOOD<input type="radio" name="gender" value="f"required></input>
 VERY BAD<input type="radio" name="gender" value="o"required></input><br><br>
<button name="submit" onclick="index.php"class="butt"><span> SUBMIT </span></button>
</div>
</form>
		</div>
<marquee width="100%" direction="up" height="100px" class="ho">
created by vrut patel, sharvari kamble and jay patel
	</marquee>
	 <script src="script.js"></script> 
 </body>
</html>
<?php

$un=$_GET['username'];
$em=$_GET['email'];
$pw=$_GET['password'];
$ge=$_GET['gender'];

$query ="INSERT INTO form VALUES ( '$un', '$em', '$pw', '$ge',)";
$data =mysqli_query($connect,$query);
if($data){
	echo "data inserted into database";
}
else{
	echo "failed to connect database";
}
?>