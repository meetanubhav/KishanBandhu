<?php
session_start();
    $fid=$_SESSION['fid']; 
    $_SESSION['logout']=22;
    include '../database_driver/db.php';
    $res=mysqli_query($con,"select * from fredg where fid='$fid'");
    $far=mysqli_fetch_assoc($res);
    $district=$far['district'];
    $r=mysqli_query($con,"select * from eredg where district='$district'");
    $result=mysqli_query($con,"select * from lredg where district='$district'");
    $llord=mysqli_fetch_assoc($result);
    $lid=$llord['lid'];
    $lr=mysqli_query($con,"select * from addland where lid='$lid'");
    $_SESSION['fid']=$fid;    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmer page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="../assets/js/farmer.js"></script> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#farmerContent").show();
  $("#hide").click(function(){
    $("#farmerContent").hide();
  });
  $("#show").click(function(){
    $("#farmerContent").show();
  });
});
</script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="#"><i class="fas fa-tractor"></i> Kishan Bandhu</a>
        <div class="my-2 my-lg-0" id="myProfileBtn">
            <button type="button" class="btn btn-outline-light btn-sm">
                <span class="fa fa-user"></span></button>
        </div>
        <div class="my-2 my-lg-0" id="myNotificationBtn">
            <button type="button" class="btn btn-outline-light btn-sm">
                <span class="fa fa-bell"></span></button>
        </div>
        <div class="my-2 my-lg-0" id="mySignoutBtn">
            <a  href="../SignoutHandler/lsignout.php"><button type="button" class="btn btn-danger btn-lg">
                <span class="fa fa-power-off"></span> Sign Out
            </button></a>
        </div>
    </nav>

    <!-- Body starts -->
    <div class="container-fluid">
        <div class="row">
            <img src="http://agricoop.gov.in/sites/all/themes/agricoop/images/inner-banner.jpg" alt="farming" srcset="">
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="card">
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                            onclick="availableLand()">Available
                            Land</button></div>
                    <hr>
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                            onclick="govtScheme()">Government<br>
                            Scheme</button></div>
                    <hr>
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                            onclick="mandi()">Mandi</button></div>
                    <hr>
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                            onclick="shop()">Shop</button></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body text-center" id="farmerContent">

                        <?php
                         if($arr1=mysqli_fetch_assoc($lr))
                    {
                    echo $arr1['tot'];      
                    echo "string";          
                        }


            ?>
                
            </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Expert's Advice</div>
                    <div class="card-body text-center">
                        <?php
                            // if ($arr=mysqli_fetch_assoc($r))
                            // {
                            //     echo $arr['name'];
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body ended -->
</body>

</html>