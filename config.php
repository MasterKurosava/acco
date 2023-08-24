<?php
ob_start();  

$con = mysqli_connect("localhost", "root", "", "acco"); 

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
