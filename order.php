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
                <?php
                
                
                ?>
                    <ul>
                        <li><a href="index.php"> Home </a></li> 
                        <li><a href="menu.php"> Food Menu </a></li>
                        <li><a href="corder.php"> Food Order </a></li>
                        <li><a href="#"> About </a></li>
                        <li><a href="#"> Contact </a></li>
                        <li> <a href="logout.php">Log Out </a></li>
                        
                    </ul>
                </div>
            </div>
            
            <div class="clr"></div>
        </div>
    </div>
   <div class="insertion">
        <link rel="stylesheet" href="css/insert.css">
        <div class="full insert-full">
            <div class="insert">
                <h1 class="text-white text-center"> Order </h1>
                <form action="" method="post">
                <label> contact no</lebel> 
                <input type="text" name="contact_no" required> <br>
                <label> adress</lebel> 
                <input type="text" name="adress" required> <br>
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
$_SESSION['f_id']=$f_id;
//echo $_SESSION['f_id'];
$sql= "SELECT price,discount FROM `foods` WHERE id=$f_id";
//echo $sql;
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    
   $price=$row['price'];
   $discount=$row['discount'];
}

if(isset($_POST['order']))
 {
  // $name=$_POST['name'];
   $u_id= $_SESSION['id'];
   $f_name=$_SESSION['f_name'];
  
   $contact=$_POST['contact_no'];
   $adress=$_POST['adress'];
   $quantity=$_POST['quantity'];
   $d_price=$price * $quantity;
   $total_price = $d_price-($d_price*($discount/100.00));
   date_default_timezone_set("Asia/Dhaka");
   $date= date('m/d/y-g:i a') ;
  // echo $date;
   //$_SESSION['order']=array($f_id);
   $sql = "insert into `order` values (null,$u_id,'$f_name',$quantity,$total_price,$f_id,$contact, '$adress','$date') ";
   $result = mysqli_query($conn,$sql);

     if($result)
     {
        echo "<script>
        alert('Order Successfull');
        window.location.href='corder.php'
        </script>
        ";
     }
     
 }
   
 
?>