<?php
session_start();
	$lid=$_SESSION['lid'];
	
if (isset($_POST["submit"]))
{
	$area = strip_tags($_POST["area"]);
	$price = strip_tags($_POST["price"]);
	$month = strip_tags($_POST["month"]);
	$crop = strip_tags($_POST["crop"]);
	$year = strip_tags($_POST["year"]);
	// $des = strip_tags($_POST["des"]);
	$des=0;
	$tot = $price*$area*$month;
	echo "$lid";
	echo "\n";
	echo "$area";
	echo "\n";
	echo "$price";
	echo "\n";
	echo "$month";
	echo "\n";
	echo "$crop";
	echo "\n";
	echo "$year";
	// echo "\n";
	// echo "$des";
	echo "\n";
	echo "$tot";
	echo "\n";
	if ($des==0) {
		$des='no description';
	}
	echo $des;

	// include '../database_driver/db.php';
	$con = mysqli_connect("localhost","root","","kisan") or die ("conn fail");
	$result=mysqli_query($con,"INSERT INTO addland( lid, area, price, month, crop, year, des, tot) values ('$lid', '$area', '$price', '$month', '$crop', '$year', '$des', '$tot')");


	// $r=mysqli_query($con,"INSERT INTO addland(lid, area, price, month, crop, year, des, tot) VALUES ('$lid', '$area', '$price', '$month', '$crop', $year', '$des', '$tot)");
	if ($result>0)
        {
        	echo "string";
        	$_SESSION['lid']=$lid;
            header('location:  landlordHome.php');
        }
        // else{header('location: error.html');}
}
?>