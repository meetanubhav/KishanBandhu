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
    $_SESSION['lid']=$lid;  
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
    <link rel="stylesheet" href="../assets/css/farmer.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="../assets/js/farmer.js"></script> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#farmerContent").hide();
    $("#default").show();
  $("#hide").click(function(){
    $("#farmerContent").hide();
  });
  $("#show").click(function(){
     $("#default").hide();
    $("#farmerContent").show();
    $("#govtScheme").hide();
    $("#shop").hide();
    $("#mandi").hide();
  });
});

$(document).ready(function(){
    $("#govtScheme").hide();
  $("#hide").click(function(){
    $("#govtScheme").hide();
  });
  $("#show1").click(function(){
    $("#govtScheme").show();
    $("#default").hide();
    $("#farmerContent").hide();
    $("#shop").hide();
    $("#mandi").hide();
  });
});

$(document).ready(function(){
    $("#mandi").hide();
  $("#hide").click(function(){
    $("#mandi").hide();
  });
  $("#show2").click(function(){
    $("#mandi").show();
    $("#default").hide();
    $("#farmerContent").hide();
    $("#shop").hide();
    $("#govtScheme").hide();
  });
});

$(document).ready(function(){
    $("#shop").hide();
  $("#hide").click(function(){
    $("#shop").hide();
  });
  $("#show3").click(function(){
    $("#shop").show();
    $("#default").hide();
    $("#govtScheme").hide();
    $("#farmerContent").hide();
    $("#mandi").hide();
  });
});

$(document).ready(function(){
    $("#btnsel").show();
    $("#makeDeal").hide();
  $("#btnsel").click(function(){
    $("#makeDeal").show();
    $("#btnsel").hide();
  });
});
</script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="#"><i class="fas fa-tractor"></i> Kishan Bandhu</a>
        <div class="my-1 my-lg-0" id="myProfileBtn">
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
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-md"
                            id="show">Available
                            Land</button></div>
                    <hr>
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-md"
                            id="show1">Government<br>
                            Scheme</button></div>
                    <hr>
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-md"
                            id="show2">Mandi</button></div>
                    <hr>
                    <div class="card-body text-center"><button type="button" class="btn btn-link btn-md"
                            id="show3">Shop</button></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body text-center" id="default">
                        <h1>It is only the farmer who faithfully plants seeds in the Spring, who reaps a harvest in the Autumn.
                        <br>
                        ~ B. C. Forbes</h1>
                    </div>
                    <div class="card-body text-center" id="farmerContent">
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th>Area</th>
                                    <th>Price(rs/sqf)</th>
                                    <th>Num Month</th>
                                    <th>Crop</th>
                                    <th>Year</th>
                                    <th>Description</th>
                                    <th>Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                        <?php
                                while ($arr1 = $lr->fetch_assoc())
                                 // if($arr1=mysqli_fetch_assoc($lr))
                            {
                            // echo $arr1['tot'];      
                            // echo "string";    
                            ?>
                            
                                  <!-- <tr>
                                    <td>Default</td>
                                    <td>Defaultson</td>
                                    <td>def@somemail.com</td>
                                  </tr>  -->     
                                  <tr class="table-primary">
                                    <td><?php echo $arr1['area']; ?> Acers</td>
                                    <td><?php echo $arr1['price']; ?></td>
                                    <td><?php echo $arr1['month']; ?></td>
                                    <td><?php echo $arr1['crop']; ?></td>
                                    <td><?php echo $arr1['year']; ?></td>
                                    <td class="text-sublime"><?php echo $arr1['des']; ?></td>
                                    <td><?php $totalamt=$arr1['tot'];
                                    $landid=$arr1['landid'];
                                    echo $totalamt; ?></td>
                                    <?php 
                                    $_SESSION['landid']=$landid;
                                    $paycheck=mysqli_query($con,"select * from fpay where landid='$landid'");
                                    if($payfetch=mysqli_fetch_assoc($paycheck))
                                    {
                                        if($payfetch['paystat']==0)
                                        {
                                    ?>                                    
                                    <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span></button></td>
                                    <?php
                                    }
                                    else{
                                        echo "Land booked";
                                    }
                                    } 
                                    ?>
                                  </tr>
                                </tbody>
                              </table>
                            
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div id="btnsel">
                                          <a href="fpayment.php" style="color: white;"><button type="button" class="btn btn-primary">Pay</a></button>
                                          <button type="button" class="btn btn-success">Make Deal</button>
                                      </div>
                                      <div id="makeDeal">
                                          <form method="POST" action="landreq.php">
                                            <div class="form-group">
                                              <label>Expected</label>
                                            </div>
                                            <div class="form-group">
                                              <label for="rev">% of revenue:</label>
                                              <input type="text" class="form-control" id="rev">
                                              <input type="text" class="form-control" id="rev">
                                              <input type="submit" class="btn btn-success btn-sm" name="submit">
                                            </div>
                                          </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                             </div>
                            <?php      
                            }
                            ?>
                        
                    </div>
                    <!-- govt scheme -->
                    <div class="card-body text-center" id="govtScheme">
                        govtschemes
                    </div>
                    <!--  -->
                    <div class="card-body text-center" id="mandi">
                        Mandi rates
                    </div>
                    <!--  -->
                    <div class="card-body text-center" id="shop">
                        Shop posting
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Expert's Advice</div>
                    <div class="card-body text-center">
                        <?php
                        // $_SESSION['paystat']=$totalamt;
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