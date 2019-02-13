<?php
	$lid=$_SESSION['lid'];
	$_SESSION['lid']=$lid;
	include '../database_driver/db.php';
	$area = strip_tags($_POST["area"]);
	$price = strip_tags($_POST["price"]);
	$month = strip_tags($_POST["month"]);
	$year = strip_tags($_POST["year"]);
	$des = strip_tags($_POST["name"]);
	$tot = $price*$area*$month;
	$r=mysqli_query($con,"INSERT INTO addland(lid, area, price, month, year, des, tot) VALUES ('$lid', '$area', '$price', '$month', '$year', '$des', '$tot)");
	if ($r>0)
        {
            header('location: ../Dashboard/landlordHome.php');
        }
        else{header('location: error.html');}
?>