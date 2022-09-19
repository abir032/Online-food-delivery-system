<?php require 'dbconnect.php'

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hellofood | login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="signupbox">
        <div class="signup-area">
            <img src="images/logo5.png">
            <form action="" method="post">
                <p>Username</p>
                <input type="text" name="nam" placeholder="Enter Username" required>
                <p>Email Address</p>
                <input type="email" name="email" placeholder="Enter Email Address" required>
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password" required>
                <p>Confirm Password</p>
                <input type="password" name="cpass" placeholder="Enter Password" required>
                <p>Full Name</p>
                <input type="text" name="f_name" placeholder="Full name" required>
                <input type="submit" name="sub" value="Sign up">
                <a href="login.php"><u>Already have an account?</u> (Login)</a>
            </form>
        </div>
    </div>
</body>
</html>
</form>
<?php
    //session_start();
   if(isset($_POST['sub']))
   {
     $name=$_POST['nam'];
     $pass=md5($_POST['pass']);
     $pass1=md5($_POST['cpass']);
     $email=$_POST['email'];
     $f_name=$_POST['f_name'];
     if($pass == $pass1)
     {
        //$_SESSION['user_name']=$name;
        $sql="insert into user values (null,'$name','$pass','$f_name','$email')";
        $result=mysqli_query($conn,$sql);
       if($result )
        echo "<script>
       alert('Successfully created');
       window.location.href='login.php'
       </script>
       ";
     }
     else
     {
        echo "<script>
        alert('password & retype password not match!');
        
        </script>";
     }
   }
?>
