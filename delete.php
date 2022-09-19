<?php
  require 'dbconnect.php>';
  $id=$_GET['id'];
  $sql="delete from foods where id=$id ";
  if(mysqli_query($conn,$sql))
  {
    echo "<script>
    alert('Successfully deleted');
    window.location.href='adminpanel.php'
    </script>
    ";
  }
?>