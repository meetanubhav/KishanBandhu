<?php
    session_start();
    $fid=$_SESSION['fid'];
    $lid=$_SESSION['lid'];
    $landid=$_SESSION['landid'];
    $paystat=1;
    include '../database_driver/db.php';
    $r=mysqli_query($con,"INSERT INTO fpay(fid,lid,landid,paystat) VALUES ('$fid','$lid','$landid',$paystat')");
    if ($r>0)
        {
            header('location: ../Dashboard/farmerHome.php');
        }
        else{ 
<<<<<<< HEAD
            header('location: error.html');
=======
        	header('location: error.html');
>>>>>>> 2578c6ec213ab3670bb9c1b42d70017a256c680e
        }
?>