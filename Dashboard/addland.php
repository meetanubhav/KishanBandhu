<?php
session_start();
	$lid=$_SESSION['lid'];
	
	
	$area = strip_tags($_POST["area"]);
	$price = strip_tags($_POST["price"]);
	$month = strip_tags($_POST["month"]);
	$crop = strip_tags($_POST["crop"]);
	$year = strip_tags($_POST["year"]);
	$des = '0';
	$tot = $price*$area*$month;
	echo "$area";
	echo "\n";
	echo "$price";
	echo "\n";
	echo "$month";
	echo "\n";
	echo "$crop";
	echo "\n";
	echo "$year";
	echo "\n";
	echo "$des";
	echo "\n";
	echo "$tot";
	echo "\n";
	echo $des;

	include '../database_driver/db.php';

	$r=mysqli_query($con,"insert into addland( lid, area, price, month, crop, year, des, tot) values ('$lid', '$area', '$price', '$month', '$crop', $year', '$des', '$tot)");

	// $r=mysqli_query($con,"INSERT INTO addland(lid, area, price, month, crop, year, des, tot) VALUES ('$lid', '$area', '$price', '$month', '$crop', $year', '$des', '$tot)");
	// if ($r>0)
 //        {
 //        	echo "string";
 //        	$_SESSION['lid']=$lid;
 //            header('location:  landlordHome.php');
 //        }
 //        else{header('location: error.html');}
?>