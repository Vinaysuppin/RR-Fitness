<?php
// used for database connectivity
require_once 'include\dbmscon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

    <!-- backend starts used for validating username and password -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
         $useremail=$_POST["useremail"];
         $password=$_POST["pass"];
         $num=0;
         $sql="SELECT * FROM `admin` WHERE `email`='$useremail' AND `password`='$password';";
         $result=mysqli_query($conn,$sql);
         $num=mysqli_num_rows($result);
         if($num>0){
            session_start();
                $_SESSION['loggedin']= true;
                $_SESSION['useremail']= $useremail;
                header("location:admin.php");
         }
         else
         echo'Invalid Password Or Username';
        }
    ?>
    <!-- backend ends  -->

    <!-- login form starts -->
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <div class="form-control">
                <input type="text" name="useremail"required>
                <label>Email</label>
            </div>
            <div class="form-control">
                <input type="password" name="pass"required>
                <label>Password</label>
            </div>
            <button type="submit"  class="btn">Login</button>
        </form>
    </div>
    <!-- login form ends -->
    
    <script src="js/loginscript.js"></script>
</body>
</html>