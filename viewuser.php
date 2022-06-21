+<?php

$con = mysqli_connect('localhost','root','','umpmykids');
 
// Check connection 
if($con){
    echo ""; 
}
else{
    die(mysqli_error("Error"+$con));
}

$sql="SELECT * from user";

$result=mysqli_query($con,$sql);



?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>View User Interface</title>
  <link rel="stylesheet" href="updateuser.css">

  <style>
      table{
          background: #b4d2d3;
          border-radius: 10px; 
        }

      th{
          padding: 10px;
          font-size: 15px;
      }

      td{
          padding: 20px;
          text-align: center;
          background: white;
      }

      a{
          text-decoration: none;
      }

    
    .k{
        background-color: #152636;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
    opacity: 0.9;
    border-radius: 10px;
  }

  .k:hover {
                opacity:1;
            }

      
      
  </style>
</head>

<body style=" background-color: #57b8bc;">
<center>
<div class="main-content">
	<header>
        <br>
    <img src="umpmykidslogo.jpeg"><br>
	<h2>View User Profile</h2>
	</header>
    <br>
	<main> 
        <div>

        <table>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Usertype</th>
                <th>Email</th>
                <th>Password</th>
            </tr>

            <?php

            while($display=$result->fetch_assoc())
            {

            ?>

            <tr>
                <td>
                    <?php echo "{$display['username']}"?>
                </td>
                <td>
                    <?php echo "{$display['name']}"?>
                </td>
                <td>
                    <?php echo "{$display['usertype']}"?>
                </td>
                <td>
                    <?php echo "{$display['email']}"?>
                </td>
                <td>
                    <?php echo "{$display['password']}"?>
                </td>
            </tr>

            <?php

            } 

            ?> <!--End of while loop-->

            
        </table>
            
        </div>
<br><br><br><br>
        <div>
            <a class="k" href="manageuser.php"><b>Back to Manage User Interface</b></a>
        </div>

	</main>
<br>
<footer>
    <p>Copyright 2021, All Right Reserved</p>
</footer>
<center>

</body>
</html> 