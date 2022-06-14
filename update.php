+<?php

session_start();

$con = mysqli_connect('localhost','root','','umpmykids');
 
// Check connection 
if($con){
    echo ""; 
}
else{
    die(mysqli_error("Error"+$con));
}

$up=$_GET['user_update'];

$sql="SELECT * FROM user WHERE u_id='$up' ";

$result=mysqli_query($con,$sql);

$info=$result->fetch_assoc();


if(isset($_POST['update']))
{
    $uname=$_POST['username'];
    $name=$_POST['name'];
    $utype=$_POST['type'];
    $email=$_POST['email'];
    $pwd=$_POST['pass'];

    $query="UPDATE user SET username='$uname', 
    name='$name', usertype='$utype', email='$email',
    password='$pwd' WHERE u_id='$up' ";

    $result2=mysqli_query($con,$query);

    if($result2)
    {
        header("location:updateuser.php");
    }
}




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Profile</title>

    <link rel="stylesheet" href="createprofile.css">
   
</head>
<body>


    <form action="#" method="POST"> 
      <div class="kotak">
      <img padding-right=10px; width=18%; style="float:left"; src="umpmykidslogo.jpeg"> 
      <br><br><br><br>
        <h1>Update User Profile</h1>

        <br><br><br><br>
       
        <hr> 

        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="username" 
         value="<?php echo "{$info['username']}"; ?> " autocomplete="off" required>
    <br>
        <label for="name"><b>Name:</b></label>
        <input type="text" placeholder="Enter Full Name" name="name" 
        value="<?php echo "{$info['name']}"; ?> " autocomplete="off" required>
    <br>
        <label for="type"><b>Usertype:</b></label>
        <input type="text" placeholder="Enter Usertype" name="type" 
        value="<?php echo "{$info['usertype']}"; ?> " autocomplete="off" required>
    <br>
        <label for="email"><b>Email:</b></label>
        <input type="text" placeholder="Enter Email" name="email"
        value="<?php echo "{$info['email']}"; ?> " autocomplete="off" required>
    <br>
        <label for="pass"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="pass"
        value="<?php echo "{$info['password']}"; ?> " required>
    <br>
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
        <div>
          <button type="submit" name="update">Update Profile</button>
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