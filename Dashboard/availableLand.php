<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php
			session_start();
				$fid=$_SESSION['fid'];
	    		$_SESSION['fid']=$fid;
				include '../database_driver/db.php';
				$res=mysqli_query($con,"select * from fredg where fid='$fid'");
				$far=mysqli_fetch_assoc($res);
				$city=$far['city'];
				$r=mysqli_query($con,"select * from lredg where city='$city'");
				$llord=mysqli_fetch_assoc($r);
				$lid=$llord['lid'];
				$lr=mysqli_query($con,"select * from addland where lid='$lid'");
				if ($arr1=mysqli_fetch_assoc($lr))
				{
					echo $arr1['tot'];		
					echo "string";			
				}


			?>
		</div>
		<div class="col-md-3"></div>		
	</div>
</body>
</html>