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
               
               
               $sql="SELECT  order.id,foods.name,quantity,total_price,d_t FROM `order`,`foods` WHERE user_id=$u_id AND order.id='".$row['id']."' AND order.food_id=$f_id AND foods.id=$f_id ";
               $corder=mysqli_query($conn,$sql);
           }  
           while($roww=mysqli_fetch_assoc($corder))
           {
            $order=array();
            array_push($order,$roww['id']);
             //$food=array();
           // array_push(food,$f_id);
            $arrlength=count($order);

            for($x=0;$x<$arrlength;$x++)
              {
              echo $order[$x];
              echo "<br>";
              //echo $food[$x];
              }
            
           
           }  
?>           