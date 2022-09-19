
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Hellofood Restaurent </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
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
    </div> 
    <!-- header part end -->
    <div class="full banner">
        <div class="main">
            <div class="banner-txt">
                <h2>Sell:</h2>
                <img src="images/sec-shape.png" alt="">
                <div class="opacity">
                <table width="1180" cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                    <th height="100%" width="25%" ><h3>Id</h3></th>
                        <th height="100%" width="25%" ><h3>Food Name</h3></th>
                        <th height="100%" width="20%" ><h3>Quantity</h3></th>
                        <th height="100%" width="20%" ><h3>Price</h3></th>
                        <th height="100%" width="20%" ><h3>Date&time</h3></th>
                        
                    </tr>
                    <tr>
                        <th height="100%" width="25%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="20%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="20%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="20%" ><img src="images/sec-shape.png" alt=""></th>
                         <th height="100%" width="20%" ><img src="images/sec-shape.png" alt=""></th>
                    </tr>
                </table>
                <?php
                       require 'dbconnect.php';
                       $total_sell=null;
                       $id="SELECT * FROM `order_foods`";
                       $result = mysqli_query($conn,$id);
                       while($row=mysqli_fetch_assoc($result))
                    {?>
                <table width="1180" cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                
                        <td height="100%" width="25%" ><?php echo $row["id"]; ?></td>
                        <td height="100%" width="25%" ><?php echo $row['food_name']; ?></td>
                        <td height="100%" width="20%" ><?php echo $row["quantity"]; ?></td>
                        <td height="100%" width="20%" ><?php echo $row["price"]?></td>
                        <td height="100%" width="20%" ><?php echo $row["d_t"]?></td>
                    </tr>
                </table>

                <?php $total_sell+=$row["price"];}?>
                <table width="1180" cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                        <td height="100%" width="25%" ></td>
                        <td height="100%" width="20%" ></td>
                        <td height="100%" width="20%" ><h4>Total Sell</h4></td>
                        <td height="100%" width="20%" ><h4><?php echo $total_sell;?></h4></td>
                        <td height="100%" width="15%" ></td>
                    </tr>
                    
                </table>
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