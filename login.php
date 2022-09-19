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
               <a href="#"><u>Lost your password?</u></a><br> 
                <a href="signup.php"><u>Don't have an account?</u> (Sign up / Register)</a>
            </form>
        </div>
    </div>
</body>
</html>
<?php   
   if(isset($_POST['sign_in']))
   {
   $name=NULL;
   $pass=NULL;
   $result=NULL;
    //echo 'submit';
    $name=$_POST['name'];
    $pass=md5($_POST['passs']);
    $sql="select id,username,password,full_name from user where username='$name'&& password='$pass'";
    $result=mysqli_query($conn,$sql);
   // $output=mysqli_num_rows($result)
    if($output=mysqli_num_rows($result) > 0)
    {
       //echo "sign in";
       
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        $f_name=$row['full_name'];
        
    }
       //echo  $f_name;
       session_start();
       $_SESSION['id']=$id;
       $_SESSION['f_name']= "$f_name";
       
      // echo $_SESSION['id'];
       echo "<script>
    alert('successfull !');
    window.location.href='index.php'
    </script>";
      
    } 
    else{
    echo "<script>
    alert('wrong password or user name !');
    window.location.href='login.php'
    </script>";
    }
}
?>
