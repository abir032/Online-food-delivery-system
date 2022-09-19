<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Hellofood Restaurent </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/order.css">
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
    <div class="full banner">
        <div class="main">
            <div class="banner-txt">
                <h2>Order:</h2>
                <img src="images/sec-shape.png" alt="">
                <div class="opacity">
                <table width="1180" cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                        <th height="100%" width="15%" ><h3>Food name</h3></th>
                        <th height="100%" width="15%" ><h3>quantity</h3></th>
                        <th height="100%" width="15%" ><h3>Total price</h3></th>
                        <th height="100%" width="15%" ><h3>Date&Time</h3></th>
                    </tr>
                    <tr>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                    </tr>
                </table>
                <?php
           require 'dbconnect.php';
           session_start();
           $f_id=$_SESSION['f_id'];
           $u_id= $_SESSION['id'];
           $f_name=$_SESSION['f_name'];
           $id="SELECT * FROM `order` WHERE user_id=$u_id";
           $result = mysqli_query($conn,$id);
           while($row=mysqli_fetch_assoc($result))
           {
            $sql="SELECT  foods.name,quantity,total_price,d_t FROM `order`,`foods` WHERE user_id=$u_id AND order.id='".$row['id']."'  AND order.food_id=$f_id AND foods.id=$f_id ";
            $corder = mysqli_query($conn,$sql);
           }
         while($roww=mysqli_fetch_assoc($corder))
          {
          ?>
                <table width="1180" cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                
                        <td height="100%" width="15%" ><?php echo $roww["name"]; ?></td>
                        <td height="100%" width="15%" ><?php echo $roww["quantity"]; ?></td>
                        <td height="100%" width="15%" ><?php echo $roww["total_price"]; ?></td>
                        <td height="100%" width="15%" ><?php echo $roww["d_t"]; ?></td>
                    </tr>
                </table>
        <?php } ?>
                </div>
                <div class="clr"></div>
              
            </div>
        </div>
    </div>
    <!--   end of banner -->
    
    <div class="footer">
            <p> © 2019, Hellofood.com : Online Food Delivery Service in Bangladesh. All rights reserved </p>
        </div>

    <script src="js/e8b72830d1.js"></script>
</body>

</html>