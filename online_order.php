
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
                    <th height="100%" width="8%" ><h3>Id</h3></th>
                        <th height="100%" width="8%" ><h3>user id</h3></th>
                        <th height="100%" width="15%" ><h3>Food name</h3></th>
                        <th height="100%" width="15%" ><h3>customer name</h3></th>
                        <th height="100%" width="15%" ><h3>contact number</h3></th>
                        <th height="100%" width="16%" ><h3>Address</h3></th>
                        <th height="100%" width="8%" ><h3>quantity</h3></th>
                        <th height="100%" width="15%" ><h3>Total price</h3></th>
                        <th height="100%" width="15%" ><h3>Date_&_time</h3></th>

                    </tr>
                    <tr>
                        <th height="100%" width="8%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="8%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="16%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="8%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>
                        <th height="100%" width="15%" ><img src="images/sec-shape.png" alt=""></th>

                    </tr>
                </table>
                <?php
                      require 'dbconnect.php';
                      $sql="SELECT order.id,user_id ,foods.name, order.c_name ,contact_no,address,quantity,total_price,order.d_t FROM `order`,`foods` WHERE foods.id = food_id";
                      $result = mysqli_query($conn,$sql);
                      while($row=mysqli_fetch_assoc($result))
                      {
                ?>
                <table width="1180" cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                
                        <td height="100%" width="8%" ><?php echo $row["id"]; ?></td>
                        <td height="100%" width="8%" ><?php echo $row["user_id"]; ?></td>
                        <td height="100%" width="15%" ><?php echo $row["name"]; ?></td>
                        <td height="100%" width="15%" ><?php echo $row["c_name"];?></td>
                        <td height="100%" width="15%" ><?php echo $row["contact_no"];?></td>
                        <td height="100%" width="16%" ><?php echo $row["address"];?></td>
                        <td height="100%" width="8%" ><?php echo $row["quantity"];?></td>
                        <td height="100%" width="15%" ><?php echo $row["total_price"];?></td>
                        <td height="100%" width="15%" ><?php echo $row["d_t"];?></td>
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