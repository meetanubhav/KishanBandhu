<?php
	session_start();
    $fid=$_SESSION['fid'];
    $lid=$_SESSION['lid'];
    $paystat=$_SESSION['paystat'];
    include '../database_driver/db.php';
    $r=mysqli_query($con,"INSERT INTO fpay(fid,lid,paystat) VALUES ('$fid','$lid','$paystat')");
    if ($r>0)
        {
            header('location: ../Dashboard/farmerHome.php');
        }
        else{
        	header('location: error.html');
        }
?>