<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6"><img align="left" src="Phaseone\Material\vector.png" height="120px" width="150px"></div>
        <div class="col-md-6"><img align="right" src="Phaseone\Material\social-medi.png" height="100px" width="250px"></div>
    </div>

    <!-- Navbar-->
    <?php include 'navbar.php';?>
    <!-- Prducts lists-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"  align="center">
                    <img src="Phaseone\Material\images.png" />

            </div>
            <div class="col-md-6" align="center">
                <h4>Samsung 7</h4>
                <h5>Catagory:Phone</h5>
                <h5>Price: Rs 35,000</h5>
                <h5>Color: Gold</h5>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <h3>The Smartphone that Thinks Big</h3>
           <p style="font-size: 25px; ;"> Make way for the new Samsung Galaxy Note 7 which has a dual-curved screen of 5.7 inches so that you can do more in a better and best way.
               <br>
            It is an ultimate entertainment device which gives you a complete access to all the HDR videos and API games.
            This water-resistant phone takes you to the whole new level of entertainment,
            just the way you wanted</p>
        </div>
    </div>
    <!-- footer -->
    <?php include 'footer.php'?>

</div>
</body>
</html>
