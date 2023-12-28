<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="Register"><h1> Register</h1></div>   
  <form action='connect.php' method='Post'> 
        <div>
            <br></br><label for="UserID">User ID</label>
            <input type="text" name="sname" id="UserID" placeholder="Enter your User ID" required><br></br>
        </div>
        <div>
            <label for="Username">Username</label>
            <input type="text" name="sname" id="Username" placeholder="Enter your Username" required><br></br>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="Password" name="sname" id="Password" placeholder="Enter your Password" required><br></br>
        </div>
            <label></label><br></br>
         <button type="submit">Login</button>
         
</form>
</body>
</html>