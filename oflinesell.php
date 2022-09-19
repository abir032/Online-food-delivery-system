
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Hellofood Restaurent </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/index.css">
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
                        <li><a href="online_order.php"> Order </a></li>
                        <li><a href="sell.php"> Sell </a></li>
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
            <form action="" method="post">
                <h1 class="text-white text-center"> Order </h1>
                <label> quantity</lebel> 
                <input type="text" name="quantity" required> <br>
                <button class=" " type="submit" name="order"> Order </button><br>
                </form>
            </div>
        </div>  
    </div> 
</body>
</html>
<?php
require 'dbconnect.php';
session_start();
$f_id=$_GET['id'];
//echo $_SESSION['f_id'];
$sql= "SELECT name,price,discount FROM `foods` WHERE id=$f_id";
//echo $sql;
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    $name=$row['name'];
    $_SESSION['food_name']="$name" ;
    $price=$row['price'];
    $discount=$row['discount'];
    date_default_timezone_set("Asia/Dhaka");
    $date= date('m/d/y-g:i a') ;
}
if(isset($_POST['order']))
 {
   $quantity=$_POST['quantity'];
   $d_price=$price * $quantity;
   $total_price = $d_price-($d_price*($discount/100.00)); 
   $sql = "insert into `order_foods` values (null,$f_id,'$name',$quantity,$total_price,'$date') ";
   $result = mysqli_query($conn,$sql);
     if($result)
     {
        echo "<script>
        alert('Order Successfull');
        window.location.href='sell.php'
        </script>
        ";
     }
     
 }
?>
