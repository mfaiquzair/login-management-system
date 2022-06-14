<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];

        echo "<script type='text/javascript'>
        
        alert('$message');
        
        </script>";
    }



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create New Profile</title>

    <link rel="stylesheet" href="createprofile.css">

</head>
<body>


    <form action="createprofiledatabase.php" method="POST"> 
      <div class="kotak">
      <img padding-right=10px; width=18%; style="float:left"; src="umpmykidslogo.jpeg"> 
      <br><br><br><br>
        <h1>Create New User</h1>

        <br><br><br><br>

        <hr> 

        <!--<label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Your Name" name="name" required>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Your Email" name="email" required>
    
        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Your Password" name="pass" required>
    
        <label for="ulang-pass"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Your Password" name="ulang-pass" required>
-->

        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="username" autocomplete="off" required>
    <br>
        <label for="name"><b>Name:</b></label>
        <input type="text" placeholder="Enter Full Name" name="name" autocomplete="off" required>
    <br>
        <label for="type"><b>Usertype:</b></label>
        <input type="text" placeholder="Enter Usertype" name="type" autocomplete="off" required>
        <!--<select class="pilih" name="usertype">
            <option>Admin</option>
            <option>Parents</option>
            <option>Worker</option>
        </select>-->
    <br>
        <label for="email"><b>Email:</b></label>
        <input type="text" placeholder="Enter Email" name="email" autocomplete="off" required>
    <br>
        <label for="pass"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
    <br>
        <!--<label for="ulang-pass"><b>Repeat Password:</b></label>
        <input type="password" placeholder="Repeat Password" name="ulang-pass" required>
-->
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div>
          <button type="submit" name="submit">Create Profile</button>
        </div>

      </div>
    </form>
<center>
<footer>
    <p>Copyright 2021, All Right Reserved</p>
</footer>
<center>

</body>
</html> 