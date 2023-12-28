<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>President</title>
    <link rel="stylesheet" href="president.css">
    <link rel="stylesheet" href="EndPage.php">
</head>
<body>
<header class="mylogo"> 
<img src="images/mylogo.jpg" alt="" width="60px" height="60px">
</header>
<div>
<h2>Vote for Your Presidential Candidate of choice</h2>
</div>
<div class="img_container">
  <form action="" method="post">
  <img src="images/RobinsonNjeru.jpg" alt="" class="a" width="280" height="280">
  <img src="images/AminaMohamed.jpg" alt="" class="b" width="280" height="280">
  <img src="images/margretkenyatta.jpg" alt="" class="c" width="280" height="280">
  
<input type="submit" name="RobinsonNjeru" value="Vote for Robinson Njeru">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="AminaMohamed" value="Vote for Amina Mohamed">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="MargretKenyatta" value="Vote for Margret Kenyatta">
</form>

<?php
$con=mysqli_connect("localhost","root","","e-vote"); //for connection to database

//for Robinson Njeru
if(isset($_POST["RobinsonNjeru"]))
{
$vote_RobinsonNjeru="update votes set RobinsonNjeru=RobinsonNjeru + 1 ";
$run_RobinsonNjeru= mysqli_query($con,$vote_RobinsonNjeru);
if($run_RobinsonNjeru){
    echo"<h2 align='center'> You have Voted for Robinson Njeru</h2>";
    }
}
//for Amina Mohamed
if(isset($_POST["AminaMohamed"]))
{
$vote_AminaMohamed="update votes set AminaMohamed=AminaMohamed + 1 ";
$run_AminaMohamed= mysqli_query($con,$vote_AminaMohamed);
if($run_AminaMohamed){
    echo"<h2 align='center'> You have Voted for Amina Mohamed</h2>";
    }
} 
//for Margret Kenyatta
if(isset($_POST["MargretKenyatta"]))
{
$vote_MargretKenyatta="update votes set MargretKenyatta=MargretKenyatta + 1 ";
$run_MargretKenyatta= mysqli_query($con,$vote_MargretKenyatta);
if($run_MargretKenyatta){
    echo"<h2 align='center'> You have Voted for Margret Kenyatta</h2>";
    }
}
?>


  </div>
<button class="Finish Button">Finish Voting</button>
</body>
</html>