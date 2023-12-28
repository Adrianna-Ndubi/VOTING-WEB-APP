<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senators</title>
    <link rel="stylesheet" href="Senator.css">
     <link rel="stylesheet" href="Governors.php">

</head>
<body>
<header class="mylogo"> 
<img src="images/mylogo.jpg" alt="" width="60px" height="60px">
</header>
<div>
<h2>Vote for Your Senetorial Candidate of choice</h2>
</div>

<div class="img_container">
  <form action="" method="post">
  <img src="images/william_ruto.jpg" alt="" class="a" width="280" height="280">
  <img src="images/marthakarua.jpg" alt="" class="b" width="280" height="280">
  <img src="images/PeterKenneth.jpg" alt="" class="c" width="280" height="280">
  
<input type="submit" name="WilliamRuto" value="Vote for William Ruto">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="MarthaKarua" value="Vote for Martha Karua">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="PeterKenneth" value="Vote for Peter Kenneth">
</form>

<?php
$con=mysqli_connect("localhost","root","","e-vote"); //for connection to database

//for Robinson Njeru
if(isset($_POST["William Ruto"]))
{
$vote_WilliamRuto="update votes set WilliamRuto=WilliamRuto + 1 ";
$run_WilliamRuto= mysqli_query($con,$vote_WilliamRuto);
if($run_WilliamRuto){
    echo"<h2 align='center'> You have Voted for William Ruto</h2>";
    }
}
//for Martha Karua
if(isset($_POST["MarthaKarua"]))
{
$vote_MarthaKarua="update votes set MarthaKarua=MarthaKarua + 1 ";
$run_MarthaKarua= mysqli_query($con,$vote_MarthaKarua);
if($run_MarthaKarua){
    echo"<h2 align='center'> You have Voted for Martha Karua</h2>";
    }
}
//for Peter Kenneth
if(isset($_POST["PeterKenneth"]))
{
$vote_PeterKenneth="update votes set PeterKenneth=PeterKenneth + 1 ";
$run_PeterKenneth= mysqli_query($con,$vote_PeterKenneth);
if($run_PeterKenneth){
    echo"<h2 align='center'> You have Voted for Peter Kenneth</h2>";
    }
}
?>

<button class="Proceed">Proceeed</button>
  </div>
</body>
</html>