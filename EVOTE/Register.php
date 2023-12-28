<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
   <header>
    <div class="myLogo">
    <img src="images./mylogo.jpg" alt="vote-img" width="80" height="80" >
    </div>
    </header>


  <form action="Senator.php" method="post">
  <h1>WELCOME TO E-VOTE</h1>
  <h2>Please Register</h2>
    <div>
    <label for="FirstName">FirstName</label> <br>
    <input type="text" name="Fname" id="FirstName" placeholder="Enter Your First Name" > 
    </div> <br>

    <div>
    <label for="LastName">LastName</label> <br>
    <input type="text" name="Lname" id="LastName" placeholder="Enter Your Last Name" > <br>
    </div> <br>

    <div>
    <label for="VoterID">VoterID</label> <br>
    <input type="number" name="ID" id="VoterID"  placeholder="Enter Your VoterID" required> <br>
    </div> <br>

    <div>
    <label for="Password">Password</label> <br>
    <input type="Password" name="Password" id="Password" autocomplete="off" placeholder="Enter Your Password" required> 
    </div> <br>

    <div>
    <label for="Location">Location</label> <br>
    <input type="text" name="Location" id="Location" placeholder="Enter Your Location"> 
    </div> <br>

    <div>
    <label for="Gender">Gender</label><br>
    <input type="radio" id="male" name="Gender" value="male">
    <label for="Male">Male</label><br>
    <input type="radio" id="female" name="Gender" value="female">
    <label for="Female">Female</label><br>
    <input type="radio" id="other" name="Gender" value="other">
    <label for="Other">Other</label> 
    </div>
    </form>
    <div>
    <button class="Register">Register</button>
    </div>

<?php


//Establish Connection
  $conn= mysqli_connect('localhost', 'root', '', 'e-vote');

  //Check
  if(!$conn)
  {
    die("Connection Failed : ".mysqli_connect_error());
  }

  for ($i=1; $i < 16; $i++) { 
    
    $sql= "SELECT * FROM db_e-vote.tbl_voter where VoterID='".$i."'";
    $query= mysqli_query($conn, $sql);

    if(mysqli_num_rows($query)==0)
      {
        while($row==mysqli_fetch_assoc($query))
        {
          $Fname= $row['Fname'];
          $Lname= $row['Lname'];
          $ID= $row['ID'];
          $Password= $row['Password'];
          $Location= $row['Location'];
          $Gender= $row['Gender'];
          echo "
            <tr>
                <td>$Fname</td>
                <td>$Lname</td>
                <td>$ID</td>
                <td> $Password</td>
                <td>$Location</td>
                <td>$Gender</td>
                <td>NULL</td>
            </tr>   
          ";
        }
      }
  }
    mysqli_close($conn);


?>
    
</body>
</html>