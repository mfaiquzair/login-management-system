<?php

session_start();

$con = mysqli_connect('localhost','root','','umpmykids');

// Check connection 
if($con){
    echo ""; 
}
else{
    die(mysqli_error("Error"+$con));
}

if (isset($_POST['submit'])) 
	{
        $username = $_POST['username'];
        $name = $_POST['name'];
        $usertype = $_POST['type'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $sql="INSERT INTO user(username,name,usertype,email,password) VALUES ('$username','$name','$usertype','$email','$password')";

        $result=mysqli_query($con,$sql);

        if($result)
        {
            $_SESSION['message']="Registration is successful";

            header("location:viewuser.php");
        }
        else
        {
            echo "Failed";
        }

	}//done4now














?> 