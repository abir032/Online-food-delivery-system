<?php 
	$conn = mysqli_connect("localhost","root","","rms");
	if(!$conn){
		die("connection failed ".mysqli_error());
  }
 // else echo 'conected';
 ?>