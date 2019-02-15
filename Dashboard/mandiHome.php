<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mandi Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

    <!-- Body -->
    <br>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3 col-sm-12">
            <div class="card">
                <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                        id="show">Market Price</button></div>
                <hr>
                <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                        id="show1">Farmer List</button></div>
                <hr>
                <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                        id="show2">Update Farmer</button></div>
                <hr>
                <div class="card-body text-center"><button type="button" class="btn btn-link btn-lg"
                        id="show3">Issues   </button></div>
            </div>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <table border=1>
                        <thead>
                            <tr>
                                <th>Odisha</th>
                                <th>Angul</th>
                                <th>Angul(Atthamallick)</th>
                                <th>Bhindi(Ladies Finger)</th>
                                <th>Bhindi</th>
                                <th>14-02-2019</th>
                                <th>3100</th>
                                <th>3500</th>
                                <th>3300</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Odisha</td>
                                <td>Angul</td>
                                <td>Angul(Atthamallick)</td>
                                <td>Brinjal</td>
                                <td>Brinjal</td>
                                <td>14-02-2019</td>
                                <td>1400</td>
                                <td>1600</td>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <td>Odisha</td>
                                <td>Angul</td>
                                <td>Angul(Atthamallick)</td>
                                <td>Onion</td>
                                <td>Onion</td>
                                <td>14-02-2019</td>
                                <td>1500</td>
                                <td>7000</td>
                                <td>1600</td>
                            </tr>
                            <tr>
                                <td>Odisha</td>
                                <td>Angul</td>
                                <td>Angul(Atthamallick)</td>
                                <td>Potato</td>
                                <td>Potato</td>
                                <td>14-02-2019</td>
                                <td>1200</td>
                                <td>1400</td>
                                <td>1300</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</body>