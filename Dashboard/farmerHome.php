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
    <link rel="icon" href="../assets/logo.png">
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
    $("#mandiBook").hide();
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
    $("#mandiBook").hide();
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
    $("#mandiBook").hide();
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
    $("#mandiBook").hide();
  });
});
$(document).ready(function(){
    $("#shop").hide();
  $("#hide").click(function(){
    $("#shop").hide();
  });
  $("#show4").click(function(){
    $("#shop").hide();
    $("#default").hide();
    $("#govtScheme").hide();
    $("#farmerContent").hide();
    $("#mandi").hide();
    $("#mandiBook").show();
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
        <div class="my-2 my-lg-0" id="">
            <div id="google_translate_element"></div>
            <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
            <img class="img-fluid mx-auto d-block" src="http://agricoop.gov.in/sites/all/themes/agricoop/images/inner-banner.jpg"  style="width: -webkit-fill-available;
" alt="farming" srcset="">
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
                            id="show4">Mandi Slot Book</button></div>
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

                       
                            <table class="table table-light table-striped">
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
                                
                                  <!-- <tr>
                                    <td>Default</td>
                                    <td>Defaultson</td>
                                    <td>def@somemail.com</td>
                                  </tr>  -->     
                                   <?php
                                 // if($arr1=mysqli_fetch_assoc($lr))
                                   while ($arr1 = $lr->fetch_assoc())
                            {
                            // echo $arr1['tot'];      
                            // echo "string";    
                            ?><tbody>
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
                                    <div class="modal-header">How you pay?
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
                                              <label></label>
                                            </div>
                                            <div class="form-group">
                                              <label for="rev">% of revenue:
                                              <input type="text" class="form-control" id="rev">
                                          </div>
                                          <div class="form-group">
                                         <!-- <input type="text" class="form-control" id="rev"> -->
                                              <input type="submit" class="btn btn-success btn-sm" name="submit">
                                            </div>
                                            <!-- <button type="submit" class="btn btn-success btn-sm"></button> -->
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
                        <table class="table table-light table-striped">
                          <thead>
                            <tr>
                              <!-- <th></th> -->
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Soil Health Card Scheme</td>
                            </tr>
                            <tr>
                              <td>National Mission for Sustainable Agriculture (NMSA)</td>
                            </tr>
                            <tr>
                              <td>Neem Coated Urea (NCU)</td>
                            </tr>
                            <tr>
                              <td>Pradhan Mantri Krishi Sinchai Yojana (PMKSY)</td>
                            </tr>
                            <tr>
                              <td>Paramparagat Krishi Vikas Yojana (PKVY)</td>
                            </tr>
                            <tr>
                              <td>National Agriculture Market (e-NAM)</td>
                            </tr>
                            <tr>
                              <td>Micro Irrigation Fund (MIF)</td>
                            </tr>
                            <tr>
                              <td>Agriculture Contingency Plan </td>
                            </tr>
                            <tr>
                              <td>Rainfed Area Development Programme (RADP)</td>
                            </tr>
                            <tr>
                              <td>National Watershed Development Project for Rainfed Areas (NWDPRA)</td>
                            </tr>
                            <tr>
                              <td>Pradhan Mantri Fasal Bima Yojana (PMFBY)</td>
                            </tr>
                            <tr>
                              <td>Livestock insurance Scheme</td>
                            </tr>
                            <tr>
                              <td>National Scheme on Welfare of Fishermen</td>
                            </tr>
                            <tr>
                              <td>Scheme on Fisheries Training and Extension</td>
                            </tr>
                            <tr>
                              <td>Gramin Bhandaran Yojna</td>
                            </tr>
                          </tbody>
                        </table>  
                    </div>
                    <!--  -->
                    <div class="card-body text-center" id="mandi">
                      <h3>Mandi Prices</h3>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>State</th>
                                <th>District</th>
                                <th>Commmodit</th>
                                <th>Max price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Odisha</td>
                                <td>Bargarh</td>
                                <td>Brinjal</td>
                                <td>1600</td>
                              </tr>
                              <tr>
                                <td>Odisha</td>
                                    <td>Bargarh</td>
                                    <td>Cauliflower</td>
                                    <td>1500</td>
                              </tr>
                              <tr>
                                <td>Odisha</td>
                                    <td>Bargarh</td>
                                    <td>Onion</td>
                                    <td>1500</td>
                              </tr>
                              <tr>
                                <td>Odisha</td>
                                    <td>Bargarh</td>
                                    <td>Potato</td>
                                    <td>1500</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--  -->
                    <div class="card-body text-center" id="mandiBook">
                      <form action="">
                        <div class="input-group mb-3">
                          <label for="crop">Select Crop:</label>
                          <select class="form-control" name="crop" id="crop">
                                                    <option>Rice</option>
                                                    <option>Wheat</option>
                                                    <option>Maze</option>
                                                    <option>Jowhar</option>
                                                    <option>Bajra</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <input type="date" class="form-control" placeholder="Enter date" id="date" name="date">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
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
                        <div class="container">
                          <h2>Give a call</h2>
                          <!-- <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>             -->
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Profile Pic</th>
                                <th>Name</th>
                                <th>Phone number</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><img src="https://thispersondoesnotexist.com/" class="rounded" height="32px" width="32px" alt="Cinque Terre"></td>
                                <td>Atla Harish</td>
                                <td><i class="fa fa-phone" aria-hidden="true"><a href="tel:+918298143224">+918298143224</a></i></td>
                              </tr>
                              <tr>
                                <td><img src="https://thispersondoesnotexist.com/" class="rounded" height="32px" width="32px" alt="Cinque Terre"></td>
                                <td>John Snow</td>
                                <td><i class="fa fa-phone" aria-hidden="true"><a href="tel:+918298143224">+917094538234</a></i></td>
                              </tr>
                              <tr>
                                <td><img src="https://thispersondoesnotexist.com/" class="rounded" height="32px" width="32px" alt="Cinque Terre"></td>
                                <td>Suraj Lee</td>
                                <td><i class="fa fa-phone" aria-hidden="true"><a href="tel:+918298143224">+919834567292</a></i></td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body ended -->
    <br><br><br><br>

    <!-- Footer -->
  <footer class="page-footer font-small blue pt-4 container-fluid" style="
   left: 0;
   bottom: 0;
   background-color: #5cb85c;
   color: white;
   background-image: url('http://upagripardarshi.gov.in/images/bg-footer.jpg');
   text-align: center;" id="about">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <!-- <p>Here we can use rows and columns here to organize your footer content.</p> -->

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Phone no: </h5>

          <ul class="list-unstyled">
            <li>
              <p>+917809597456</p>
            </li>
            <li>
              <p>+917075497456</p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Mail us</h5>

          <ul class="list-unstyled">
            <li>
              <a href="rrr.pradhan@gmail.com" style="color: white;">rrr.pradhan@gmail.com</a>
            </li>
            <li>
              <a href="anubhav.g@gmail.com" style="color: white;">anubhav.g@gmail.com</a>
            </li>
            <li>
              <a href="disha@gmail.com" style="color: white;">disha@gmail.com</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">&copy; 2018 Copyright:ZERO BUG
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>