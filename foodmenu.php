<link rel="stylesheet" href="signup.css">;
<?php
require 'dbconnect.php';
?>
<?php
     $sql="delete * from foods where name='burger'";
     $delete=mysqli_query($conn,$sql);
     if($delete)
     {
         echo "deleted";
         echo "<br/>";
     }
  
      
   ?>
<?php
$sql="select * from foods";
   $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
?>
  <div><?php echo $row["id"]?><h1>id</h1></div>
  <div><input type="submit" name="fd" value="<?php echo $row["name"]?>"></div>
  <div class="img-block">
        <img src="<?php echo $row["image"]; ?>" alt="" />
        <p><strong><?php echo $row["image"]; ?></strong></p>
        </div>
   <div><p>price</P> <?php echo $row["price"]?></div>
  
   <?php }?>
   