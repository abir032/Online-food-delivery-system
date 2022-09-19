<?php
require 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title> Hellofood Restaurent | Admin </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="full menu_full">
        <div class="main">
            <div class="logo">
                <a href="#"><img height="50%" width="50%" src="images/logo5.png" alt=""></a>
            </div>
            <div class="menu">
                <div class="main-menu">
                    <ul>
                        <li><a href="adminpanel.php"> Food Menu </a></li>
                        <li><a href="corder.php"> Order </a></li>
                        <li><a href="corder.php"> Sell </a></li>
                        <li><a href="insert.php"> insert </a></li>
                        <li><a href="logout.php"> Log out </a></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div> <!-- header part end -->
    <div class="insertion">
        <link rel="stylesheet" href="css/insert.css">
        <div class="full insert-full">
            <div class="insert">
                <h1 class="text-white text-center"> Admin </h1>
                <form action="" method="post">
                    <label > name </lebel> 
                    <input type="text" name="name" required> <br>
                    <label  > description </lebel> 
                    <input type="text" name="description"> <br>
                    <label  > price </lebel> 
                    <input type="text" name="price" required> <br>
                    <label  > discount </lebel> 
                    <input type="text" name="discount" required> <br>
                    <label > image </lebel> 
                    <input type="text" name="image" required> <br>
                    <button class="btn btn-success" type="submit" name="insert"> Insert </button><br>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>

<?php
 if(isset($_POST['insert']))
 {
    // $id=$_POST['id'];
   $name=$_POST['name'];
   $description=$_POST['description'];
   $price=$_POST['price'];
   $discount=$_POST['discount'];
   $image=$_POST['image'];
      //session_start();
      $sql="insert into foods values (null,'$name','$description','$price','$discount','$image')";
     $insert= mysqli_query($conn,$sql);
     if($insert)
     {
        echo "<script>
        alert('Successfully innserted');
        window.location.href='insert.php'
        </script>
        ";
     }
     
   
   else
   {
      echo "<script>
      alert('not insertted'); 
      </script>";
   }
 
}

?>


