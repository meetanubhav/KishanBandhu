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
    <script src="../assets/js/farmer.js"></script>
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
            <button type="button" class="btn btn-danger btn-lg">
                <span class="fa fa-power-off"></span> Sign Out
            </button>
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
                    <div class="card-body text-center" id="farmerContent">Content</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Expert's Advice</div>
                    <div class="card-body text-center">Content</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body ended -->
</body>

</html>