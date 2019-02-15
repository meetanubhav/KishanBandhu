<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

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
				?>
				<div class="" id>
				<?php
				if ($arr1=mysqli_fetch_assoc($lr))
				{
					echo $arr1['tot'];		
					echo "string";			
				}
			?>
		</div>
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span></button>
			<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
      </div>
    </div>
  </div>
		</div>
		<div class="col-md-3"></div>		
	</div>
</body>
</html>