
<!DOCTYPE html>
<html lang="en">
<head>
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

    <div class="updatation">
        <link rel="stylesheet" href="css/update.css">
        <div class="full update-full">
            <div class="update">
                <h1 class="text-white text-center"> Update </h1>
                <form action="" method="post">
                    <label> name </lebel> 
                    <input type="text" name="name" > <br>
                    <label> description </lebel> 
                    <input type="text" name="description"> <br>
                    <label> price </lebel> 
                    <input type="text" name="price" > <br>
                    <label> discount </lebel> 
                    <input type="text" name="discount" > <br>
                    <label> image </lebel> 
                    <input type="text" name="image" > <br>
                    <button class="btn btn-success" type="submit" name="update"> update </button><br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  require 'dbconnect.php';
 if(isset($_POST['update']))
 {
     $id=$_GET['id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $discount=$_POST['discount'];
    $image=$_POST['image'];
     // echo "djfjsd";
     // $sql="update foods set id=$id ,name=$name, description=$description,price=$price,discount=$discount,image=$image where id=$id";
      $sql="UPDATE `foods` SET name='$name',description='$description',price='$price' ,`discount` = '$discount',`image`='$image' WHERE `foods`.`id` = $id";
     $update= mysqli_query($conn,$sql);
     if($update)
     {
        //echo "djfjsd"; 
        echo "<script>
        alert('Successfully updated');
        window.location.href='adminpanel.php'
        </script>
        ";
     }
    }
?>