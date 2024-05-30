<?php include("connection.php");?>
<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $userName= $_POST['userName'];
        $password= $_POST['password'];
        $q= "select * from admin where userName ='$userName' AND password='$password'  ";
        $result = mysqli_query($con,$q);
        $num=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        if(!$num == 1)
        {
            echo '<script> alert("Wrong password")</script>';
        }
        else
        {
        
            $_SESSION['userName']=$row['password'];
            header('location:http://localhost/Restaurant/deshboard.php');
        
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/login.css" />
    <title>Login</title>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <!----------------- form for login-------------- -->
    <form action="Login.php" method="post">
        
            <label>
                <input type="text" placeholder="Enter you Name or Gmail " name="userName"/><br>

                <input  type="password" placeholder="password" name="password"/><br/>
                <button type="submit" name="submit">login</button><br>
            </label>
            
        
    </form>
     <!----------------- login form end -------------- -->
    </div>
</body>
</html>