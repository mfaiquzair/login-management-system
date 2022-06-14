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

if($_GET['user_id'])
{
    $user=$_GET['user_id'];

    $sql="DELETE FROM user WHERE u_id='$user' ";

    $result=mysqli_query($con,$sql);

    if($result)
    {
        $_SESSION['message']="Deletion is successful";

        header("location:deleteuser.php");
    }
}



?> 