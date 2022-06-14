<?php

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
<html >
<head>
  <meta charset="UTF-8">
  <title>Delete User</title>
  <link rel="stylesheet" href="deleteuser.css">

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

      .a{
            background-color: #FF0000;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.8;
        }

    .a:hover {
                opacity:1;
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


<body> 
<center>
	<main>
    <img src="umpmykidslogo.jpeg">
    <h2>Delete User</h2>
    <br><br>
        <div>
        <table>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Usertype</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
            </tr>

            <?php

            while($display=$result->fetch_assoc())
            {

            ?>

            <tr>
                <td>
                    <?php echo "{$display['username']}";?>
                </td>
                <td>
                    <?php echo "{$display['name']}";?>
                </td>
                <td>
                    <?php echo "{$display['usertype']}";?>
                </td>
                <td>
                    <?php echo "{$display['email']}";?>
                </td>
                <td>
                    <?php echo "{$display['password']}";?>
                </td>
                <td>
                    <?php echo "<a onClick=\"javascript:return confirm('ARE YOU SURE TO DELETE THIS');\"
                     class='a' href='delete.php?user_id={$display['u_id']}'>Delete</a>";?>
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
</center>
</body>
</html>