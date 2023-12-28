<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governor</title>
    <link rel="stylesheet" href="Governors.css">

</head>
<body>
<header class="mylogo"> 
<img src="images/mylogo.jpg" alt="" width="60px" height="60px">
</header>
<div>
<h2>Vote for Your Senetorial Candidate of choice</h2>
</div>

<form action="President.php" method="post">
<div class="img_container">
  <form action="President.php" method="post">
  <img src="images/janetOngera.jpg" alt="" class="b" width="280" height="280">
  <img src="images/patrickkhaemba.jpg" alt="" class="c" width="280" height="280">
  <img src="images/catherinewaruguru.jpg" alt="" class="c" width="280" height="280">
  
<input type="submit" name="JanetOngera" value="Vote for Janet Ongera">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="PatrickKhaemba" value="Vote for Patrick Khaemba ">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="CatherineWaruguru" value="Vote for Catherine Waruguru ">
</form>

<?php
$con=mysqli_connect("localhost","root","","e-vote"); //for connection to database

//for Janet Ongera
if(isset($_POST["JanetOngera"]))
{
$vote_JanetOngera="update votes set JanetOngera=JanetOngera + 1 ";
$run_JanetOngera= mysqli_query($con,$vote_JanetOngera);
if($run_JanetOngera){
    echo"<h2 align='center'> You have Voted for Janet Ongera</h2>";
    }
}
//for Patrick Khaemba
if(isset($_POST["PatrickKhaemba"]))
{
$vote_PatrickKhaemba="update votes set PatrickKhaemba=PatrickKhaemba + 1 ";
$run_PatrickKhaemba= mysqli_query($con,$vote_PatrickKhaemba);
if($run_PatrickKhaemba){
    echo"<h2 align='center'> You have Voted for Patrick Khaemba</h2>";
    }
}
//for Catherine Waruguru
if(isset($_POST["Catherine Waruguru"]))
{
$vote_CatherineWaruguru="update votes set CatherineWaruguru=CatherineWaruguru + 1 ";
$run_CatherineWaruguru= mysqli_query($con,$vote_CatherineWaruguru);
if($run_CatherineWaruguru){
    echo"<h2 align='center'> You have Voted for Catherine Waruguru</h2>";
    }
}
?>
<button class="Proceed">Proceed</button>
</form>
</div>
</body>
</html>