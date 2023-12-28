<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote For Governor</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
      <div ><h2>Vote For Candidate of Choice</h2></div>
      <div class="container">
<form action="VoteForGovernor" method="post" align="center">
<img src="williamruto.jpg" width="280" height="250"/>
<img src="marthakarua.jpg" width="280" height="250"/>
<img src="peterkenneth.jpg" width="280" height="250"/>

</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Submit" name="WilliamRuto" value="Vote for WilliamRuto">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Submit" name="MarthaKarua" value="Vote for MarthaKarua ">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Submit" name="PeterKenneth" value="Vote for PeterKenneth">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php
$con=mysqli_connect("localhost","root","","e-vote"); //for connection to database

//for William Ruto
if(isset($_POST["WilliamRuto"]))
{
$vote_WilliamRuto="update governor_votes set WilliamRuto=WilliamRuto + 1 ";
$run_WilliamRuto= mysqli_query($con,$vote_WilliamRuto);
if($run_WilliamRuto){
    echo"<h2 align='center'> You have Voted for WilliamRuto</h2>";
    }
} 
if(isset($_POST["MarthaKarua"]))
{
$vote_MarthaKarua="update governor_votes set MarthaKarua=MarthaKarua + 1 ";
$run_MarthaKarua= mysqli_query($con,$vote_MarthaKarua);
if($run_MarthaKarua){
    echo"<h2 align='center'> You have Voted for MarthaKarua</h2>";
  }
} 
if(isset($_POST["PeterKenneth"]))
{
$vote_PeterKenneth="update governor_votes set PeterKenneth=PeterKenneth + 1 ";
$run_PeterKenneth= mysqli_query($con,$vote_PeterKenneth);
if($run_PeterKenneth){
    echo"<h2 align='center'> You have Voted for PeterKenneth</h2>";
    }
} 

?>   
      </div>

</body>
</html>