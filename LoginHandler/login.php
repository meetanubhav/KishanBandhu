<?php
session_start();
$error_array=array();
if (isset($_POST["login"]))
{
	include'../database_driver/db.php';
	$username=strip_tags(mysqli_real_escape_string($con,$_POST["username"]));
	$password=strip_tags(mysqli_real_escape_string($con,$_POST["password"]));
	$optradio = strip_tags($_POST["optradio"]);
	if ($optradio==1) {
		$r=mysqli_query($con,"select * from fredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				// // $_SESSION['user_id']=$user_id;
				// $user_id=$arr['user_id'];
				// mysqli_query($con,"insert into location(user_id, latitude, longitude) values('$user_id','$latitude','$longitude')");
				// $_SESSION['email']=$email;
				header('location: ../dashboard/farmerHome.html');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==2) {
		$r=mysqli_query($con,"select * from lredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				// // $_SESSION['user_id']=$user_id;
				// $user_id=$arr['user_id'];
				// mysqli_query($con,"insert into location(user_id, latitude, longitude) values('$user_id','$latitude','$longitude')");
				// $_SESSION['email']=$email;
				header('location: ../dashboard/landlordHome.html');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==3) {
		$r=mysqli_query($con,"select * from retail where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				// // $_SESSION['user_id']=$user_id;
				// $user_id=$arr['user_id'];
				// mysqli_query($con,"insert into location(user_id, latitude, longitude) values('$user_id','$latitude','$longitude')");
				// $_SESSION['email']=$email;
				header('location: ../dashboard/retailerrHome.html');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==4) {
		$r=mysqli_query($con,"select * from mredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				// // $_SESSION['user_id']=$user_id;
				// $user_id=$arr['user_id'];
				// mysqli_query($con,"insert into location(user_id, latitude, longitude) values('$user_id','$latitude','$longitude')");
				// $_SESSION['email']=$email;
				header('location: ../dashboard/mandiHome.html');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==5) {
		$r=mysqli_query($con,"select * from eredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				// // $_SESSION['user_id']=$user_id;
				// $user_id=$arr['user_id'];
				// mysqli_query($con,"insert into location(user_id, latitude, longitude) values('$user_id','$latitude','$longitude')");
				// $_SESSION['email']=$email;
				header('location: ../dashboard/expertHome.html');
			}
			else{
				header('location: ../index.html');

			}
		}

		

}
?>


