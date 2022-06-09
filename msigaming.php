<?php

require_once 'config.php';

$sql3 = "SELECT `Number` FROM `products` WHERE `ID` = 8";
    $result2 = $link->query($sql3);
    $row = $result2->fetch_assoc();
    $temp = $row['Number'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSI Gaming Raider | Indizon</title>
    <link rel="shortcut icon" type="image/png" href="Favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2e7ef8a6e4.js" crossorigin="anonymous"></script>

    <style>
      form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: orange;
            color: black;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: darkorange;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        .topnav {
            overflow: hidden;
            background-color: #00001a;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a.active {
            background: #00001a;
            padding-left: 2%;
            padding-right: 2%;
        }

        .topnav .icon {
            display: none;
        }

        .topnav a:not(.active) {
            padding-top: 1.8%;
            float: right;
            height: 77.5px;
        }

        .topnav a:hover:not(.active) {
            background: #cccccc;
            color: black;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>


  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <div class="topnav" id="myTopnav">
        <a href="welcome.php" class="active"><img src="LogoWhite.png" width="150px;"></a>
        <a href="logout.php">Log Out</a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping "></i></a>
        <a href="contact.php">Contact</a>
        <a href="window.open('login.php','width=200,height=200');">Product</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars" style="padding-top:17%;font-size:40px;"></i>
        </a>
        <form class="example" action="/action_page.php" style="margin:auto;max-width:500px;border-radius:50px;padding-top:1.1%;">
            <input type="text" placeholder="Search..." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <ul class="nav navbar-dark bg-dark justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="MobileResults.html" style="color:white;">Mobile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="LaptopResults.html" style="color:white;">Laptop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="TVResults.html" style="color:white;">TV</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ACResults.html" style="color:white;">AC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">Furniture</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">T-shirts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">Groceries</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">Shoes</a>
        </li>
    </ul>

    <div style="padding-top: 1%;">
      <div class="container">
        <div class="row">
          <div style="padding-top: 7%;" class="col-lg-1">
                <span><img style="border: 1px solid; width:100%;margin: 5px; height: 20%;border-radius: 5%;" src="https://m.media-amazon.com/images/I/71zj-tRx4mL._SX569_.jpg" alt="big-iamge.jpg"></span>
                <span><img style="border: 1px solid; width:100%;margin: 5px;height: 20%;border-radius: 5%" src="https://m.media-amazon.com/images/I/71XWVEGRQQL._SX569_.jpg" alt="img2.jpg"></span>
                <span><img style="border: 1px solid; width:100%;margin: 5px;height: 20%;border-radius: 5%" src="https://m.media-amazon.com/images/I/710hNzVMFRL._SX569_.jpg" alt="img3.jpg"></span>
                <span><img style="border: 1px solid; width:100%;margin: 5px;height: 20%;border-radius: 5%" src="https://m.media-amazon.com/images/I/61KHPmrd-eS._SX569_.jpg" alt="img4.jpg"></span>
          </div>
          <div class="col-lg-11">
            <div class="row">
              <div class="col-lg-6">
                <img style="padding: 5px;width: 100%;" src="https://m.media-amazon.com/images/I/71zj-tRx4mL._SX569_.jpg" alt="big-image.jpg">
              </div>
              <div class="col-lg-6">
                <div class="row" style="padding-top: 10%;">
                  <div style="padding: 5px;" class="col-lg-6">
                    <h3>
                      <!-- Name -->
                      MSI Gaming Raider GE66, Intel 12th Gen. i7-12700H, 17.3" UHD 120Hz Gaming Laptop
                    </h3>
                    <span><i style="color: orange;" class="fa-solid fa-star"></i>
                      <i style="color: orange;" class="fa-solid fa-star"></i>
                      <i style="color: orange;" class="fa-solid fa-star"></i>
                      <i style="color: orange;" class="fa-solid fa-star"></i>
                      <i style="color: orange;" class="fa-regular fa-star-half-stroke"></i></span>
                      |
                    <span><a style="padding-left: 2px;" href="">rating</a></span>
                    <hr style="width: 5px solid;">
                    <div>
                      <span><h2  style="display: inline-block;color: red;margin-right: 5px;">-11%</h2></span>
                      <span><sup><i  style="display: inline-block;" class="fa-solid fa-indian-rupee-sign"></i></sup></span>
                      <span style="display: inline-block;"><h2 style="font-weight: 200;">369990<sup>00</sup></h2></span>

                    </div>
                    <div>
                      <!-- Price -->
                      <span aria-hidden="true">M.R.P.: <i  style="display: inline-block;" class="fa-solid fa-indian-rupee-sign"></i>414990</span>
                    </div>                      
                    <h6 style="font-weight: 400;">Inclusive of all taxes
                      EMI starts at ₹17,417. No Cost EMI available <a href="">EMI</a></h6>
                      <div class="dropdown">
                        <a style="background-color: #ff8c1a; color: black;border: none;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          EMI Option
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                    
                  </div>
                  <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a style="margin-right:10px;" href="">Free Delivery</a>3-june to 4-june</li>
                        <div>
                          <li style="padding:5%;display: inline-block;"><i class="fa-solid fa-location-dot"></i></li>
                        <li style="display:inline-block"><a href="">select delivery location</a></li>
                        </div>
                        <h4 style="color: #ff0000;padding: 5%;"><?php 
                          if($temp < 5)
                            echo "Only $temp left in Stock";
                        ?></h4>
                        <h4 style="color: #007600;padding: 5%;"><?php 
                          if($temp > 4)
                            echo "In Stock";
                        ?></h4>
                        <div style="padding:10px;padding-top: 0;">Sold by<a href="">Appario Retail Private Ltd</a> and Fulfilled by <a href="">Indizon</a>.</div>
                        
                      </ul>
                      <form class="card-body col-lg-12">
                        <button type="button" class="btn" style="background-color: 	  #ffd633;width: 100%;margin-bottom: 5%;padding-left: 10%;padding-right: 10%;border-radius: 50px;">Add to Cart</button>
                        <button type="submit" class="btn" style="background-color:  #ff8000;width: 100%;padding-left: 10%;padding-right: 10%;border-radius: 50px;" formaction="http://localhost/login2/msigamingOrder.php" formmethod="POST">Buy Now</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>