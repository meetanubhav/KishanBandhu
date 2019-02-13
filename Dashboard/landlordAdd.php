<?php
$lid=$_SESSION['lid'];
$_SESSION['lid']=$lid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>landLord Add</title>
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/landlord.js"></script>
</head>
<body>
    <div class="container">
        <form method="POST" action="addland.php">
        <h2 class="text-center">Add Land</h2>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body text-center" id="cost"></div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="area">Area:</label>
                            <input type="number" class="form-control" name="area" id="area">
                        </div>
                        <div class="form-group">
                            <label for="price">Price per acer:</label>
                            <input type="number" class="form-control" name="price" id="price">
                        </div>
                        <div class="form-group">
                            <label for="month">Select month:</label>
                            <select class="form-control" name="month" id="month">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <label for="year">Select year:</label>
                            <select class="form-control" name="year" id="year">
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description:</label>
                            <textarea class="form-control" rows="5" name="desc" id="desc"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="text-right">
            <button type="button" class="btn btn-info" onclick="calculate()">Check</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>