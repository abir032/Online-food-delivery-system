<?php require 'dbconnect.php' ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hellofood | login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="loginbox">
        <div class="login-area">
            <img src="images/logo5.png">
            <form action="" method="post">
                <p>Username</p>
                <input type="text" name="name" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="password" name="passs" placeholder="Enter Password" required>
                <input type="submit" name="sign_in" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
<?php   
   if(isset($_POST['sign_in']))
   {
    //echo 'submit';
    $name=$_POST['name'];
    $pass=$_POST['passs'];
    $sql="select user_id,name,password from admin where name='$name'&& password='$pass'";
    $result=mysqli_query($conn,$sql);
   // $output=mysqli_num_rows($result)
    if($output=mysqli_num_rows($result) > 0)
    {
       //echo "sign in";
       echo  $f_name;
       session_start();
       $_SESSION['user_id']=$id;
       $_SESSION['name']= "$name";
       //echo  $_SESSION['f_name'];
      // echo $_SESSION['id'];
       echo "<script>
    alert('successfull !');
    window.location.href='adminpanel.php'
    </script>";
      
    } 
    else{
    echo "<script>
    alert('wrong password or user name !');
    window.location.href='adminlogin.php'
    </script>";
    }
}
?>
