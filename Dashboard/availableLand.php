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
				$fid=$_SESSION['fid'];
	    		$_SESSION['fid']=$fid;
				include '../database_driver/db.php';
				$res=mysqli_query($con,"select * from fredg where fid='$fid");
				$far=mysqli_fetch_assoc($res);
				$district=$far['district']
				$r=mysqli_query($con,"select * from aland where district='$district'");
				if ($arr=mysqli_fetch_assoc($r))
				{
					$
				}


			?>
		</div>
		<div class="col-md-3"></div>		
	</div>
</body>
</html>