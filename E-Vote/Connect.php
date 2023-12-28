
$FirstName=$POST ['FirstName']
$LastName=$POST ['LastName']
$VoterID=$POST ['VoterID']
$Password=$POST ['Password']
$Gender=$POST ['Gender']
$Location=$POST ['Location']

//Database Connection
// Check connection
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
if(isset($_POST["RobinsonNjeru"]))
{
$vote_RobinsonNjeru="update votes set RobinsonNjeru=RobinsonNjeru + 1 ";
$run_RobinsonNjeru= mysqli_query($con,$vote_RobinsonNjeru);
if($run_RobinsonNjeru){
    echo"<h2 align='center'> You have Voted for Robinson Njeru</h2>";
    }
}   
if(isset($_POST["RobinsonNjeru"]))
{
$vote_RobinsonNjeru="update votes set RobinsonNjeru=RobinsonNjeru + 1 ";
$run_RobinsonNjeru= mysqli_query($con,$vote_RobinsonNjeru);
if($run_RobinsonNjeru){
    echo"<h2 align='center'> You have Voted for Robinson Njeru</h2>";
    }
}   
if(isset($_POST["RobinsonNjeru"]))
{
$vote_RobinsonNjeru="update votes set RobinsonNjeru=RobinsonNjeru + 1 ";
$run_RobinsonNjeru= mysqli_query($con,$vote_RobinsonNjeru);
if($run_RobinsonNjeru){
    echo"<h2 align='center'> You have Voted for Robinson Njeru</h2>";
    }
}     
?>   