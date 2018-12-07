<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
   <!-- <link rel="stylesheet" href="bootstrap.min.js" />

    <link rel="stylesheet" href="bootstrap.min.css" /> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Link jquery js file-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- link ajax js file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Link bootstrap js file-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>	<script type="text/javascript"></script>

</head>


<body style="background-color: transparent ">
<!-- Data Base -->
<?php require 'DB.php'?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6"><img align="left" src="Phaseone\Material\vector.png" height="120px" width="150px"></div>
        <div class="col-md-6"><img align="right" src="Phaseone\Material\social-medi.png" height="100px" width="250px"></div>
    </div>

    <!-- Navbar-->
    <?php include 'navbar.php'?>

    <!-- Prducts lists-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"  align="center">
                <a href="productdetails.php">
                    <img src="Phaseone\Material\images.png" />
                    <h4>Samsung Galaxy Note 7</h4>
                </a>

            </div>
            <div class="col-md-4" align="center">
                <a href="productdetail1.php">
                <img src="Phaseone\Material\apple-iphone-x-new-1.png" width="250px" height="250px" />
                <br>
                <h4>Iphone X</h4>
                </a>
            </div>
            <br>
            <div class="col-md-4" align="center">
                <a href="productdetails.html">
                <img src="Phaseone\Material\Photo1.png" />
                <h4 style="font-size: 150%;margin: 5px">HTC M9</h4>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4"  align="center">
                <a href="productdetails.html">
                    <img src="Phaseone\Material\Photo 2.jpeg"  height="250px" />
                <h4>Oppo F7</h4>
                </a>
            </div>
            <div class="col-md-4" align="center">
                <a href="productdetails.html">
                <img src="Phaseone\Material\download (1).jpeg"" width="180px" height="250px" />
                <h4>Vivo V9</h4>
                </a>
            </div>
            <div class="col-md-4" align="center">
                <a href="productdetails.html">
                <img src="Phaseone\Material\Huawei.jpeg" height="250px"/>
                <h4 style="font-size: 150%;margin: 5px">Huawei Nova2i</h4>
                </a>
            </div>
        </div>
        <br>
    </div>

    </div>
<!-- footer -->
<?php include 'footer.php'?>

</body>
</html>
