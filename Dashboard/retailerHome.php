<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retailer Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
$(document).ready(function(){
    $("#farmerContent").hide();
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

    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="card">
                    <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-plus"></span> Add</button></div><br>                
                <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-eye"></span> View List</button></div><br>                      
                <div class="text-center"><button type="button" class="btn btn-info btn-md" id="show">
                        <span class="fa fa-sync" aria-hidden="true"></span> Update List</button></div>
                </div>                     
                       <!--  <button id="hide">Hide</button>
                        <button >Show</button> -->
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Booking Requests</div>
                    <div class="card-body text-center" id="farmerContent">
                        <form method="POST" action="">
                            <h2 class="text-center">Add Store details</h2><button type="button" class="close" data-dismiss="modal">×</button>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="crop">Item</label>
                                                <input type="text" class="form-control" name="retailerItem" id="retailerItem">
                                            </div>
                                            <div class="form-group">
                                                <label for="area">Quantity:</label>
                                                <input type="number" class="form-control" name="quantity" id="quantity">
                                            </div>
                                            <input type="submit" class="btn btn-success" id="hide"></button>
                                           <!--  <div class="form-group">
                                                <label for="des">Description:</label>
                                                <textarea class="form-control" rows="5" name="des" id="des"></textarea>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Farmers</div>
                    <div class="card-body text-center">Content</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>