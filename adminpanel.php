<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Hellofood Restaurent </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/admin.css">
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
                        <li><a href="adminlogin.php"> Log out </a></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div> <!-- header part end -->
    <div class="full foodmenu-full">
        <div class="main foodmenu-main">
            <div class="foodmenu-top">
                <div class="sec-title">
	                <h2> [ Food Collection ]</h2> 
                    <img src="images/sec-shape.png" alt="">
                    <p> <span>"</span> Our menu includes a wide range of <span>fresh</span> , <span>authentic</span> and <span>delicious</span></p>
                    <p>Wraps, Burrito, Salads, Quesadillas and many more for breakfast, lunch & diner. </p>
                    <p>We at <span>Hellofood</span> pride ourselves on providing our customers with<br>
                    a <span>unique</span> and <span>pleasurable</span> food <span>experience</span> . <span>"</span></p>
                </div>
            </div>
        </div>
        <div class="foodmenu-bottom">
           <?php
           require 'dbconnect.php';
            $sql="select * from foods";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <div class="foodmenu-img">
                <img src="images/<?php echo $row['image']; ?>" alt="">
                <div class="img-overlay">
                    <h2><?php echo $row['name']; ?></h2>
                    <p>
                    <?php echo $row['description']; ?>
                    </p><br>
	               <h4><?php echo $row['price']; ?>tk</h4>
                   <h5><?php echo $row['discount']; ?>%Off</h4>
                </div>
                <br>
            
              <button><a href="oflinesell.php?id=<?php echo $row['id']?>">Add to cart</a></button>
              <button><a href="update.php?id=<?php echo $row['id']; ?>">update</a> </button>
              <button><a href="delete.php?id=<?php echo $row['id']; ?>">delete </a></button>
            </div>
            <?php } ?>
            <div class="clr"></div>
        </div>
    </div>
   
    <!--end of food menu -->
    <div class="breakfast-menu">
        <div class="breakfast-top">
           <div class="breakfast">
               
           </div> 
        </div>
        <div class="breakfast-menu">
           <div class="breakfast-img">
               
           </div> 
        </div>
        <div class="breakfast-menu">
           <div class="breakfast-img">
               
           </div> 
        </div>
    </div>
    <!--end of breakfast menu -->
        <div class="footer">
            <p> © 2019, Hellofood.com : Online Food Delivery Service in Bangladesh. All rights reserved </p>
        </div>

    <script src="js/e8b72830d1.js"></script>
</body>

</html>
