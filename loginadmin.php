<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UMPmyKids Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<center>
    <br><br>
    <div> 
        <img src="logo ump jawi.png">
        <br>
        <h1>UMP myKids <span style="color: #FFD732">Admin</span> Login</h1>
    </div>
     
    <div class="A">
<br><br>
<form>
    <div>
        <label>Username</label><br>
        <input type="text" name="username" class="isi" autocomplete="off" required>
    </div>
<br>
    <div>
        <label>Password</label><br>
        <input type="password" name="password" class="isi" required>
    </div>
<br><br>
    <div>
    
        <!--<input id="redirect" type="submit" value="Login" class="button" name="submit">
        <script>
            document.querySelector('#redirect')
            .addEventListener('click', ()=>{
                window.location.href = 'manageuser.php';
            });
        </script>
        -->
    </div>
</form>
    </div>
<br>
<button id="redirect" style="background: #152636;
    width: 350px;
    color: white;
    text-align: center;
    border-radius: 8px;
    opacity: 0.9;
    padding: 5px;">Login</button>
        <script>
            document.querySelector('#redirect')
            .addEventListener('click', ()=>{
                window.location.href = 'manageuser.php';
            });
            </script>
        
        <!--<button id="redirect">Login</button>
        <script>
            document.querySelector('#redirect')
            .addEventListener('click', ()=>{
                window.location.href = 'manageuser.php';
            });
            </script>
        -->
<br><br><br>
<footer>
    <p>Copyright 2021, All Right Reserved</p>
</footer>
</center>
</body>
</html> 