<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>Admissoin Form</h1>

     <form action="Update.php" method="POST">
          <label for="username">Username</label>
          <input type="text" name="username" id=""> </br> </br>

          
          <label for="password">Password</label>
          <input type="password" name="password"> </br> </br>


          <label for="address">Address</label>
          <input type="address" name="address">  </br> </br>


          <label for="call">Cell</label>
          <input type="call" name="call"> </br> </br>


          <label for="Gender">Gender</label>
          <input type="radio" name="gender" value="male" id=""> male
          <input type="radio" name="gender" value="Female" id=""> Female
          <input type="radio" name="gender" value="other" id=""> Other </br> </br>


          <button type="submit">Submit</button>
     </form>
</body> 
</html>



