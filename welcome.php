<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>Indizon | Home</title>
    <link rel="shortcut icon" type="image/png" href="Favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            text-align: center;
            font: 14px sans-serif;
            /* overflow-x:hidden; */
        }

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b91ccef4da.js" crossorigin="anonymous"></script>
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

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Card.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="Chair.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="Mobile.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="Clock.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="Shoes.png" class="d-block w-100">
            </div>
        </div>
        <button style="padding-bottom:10%;padding-right:5%;color:#0d0d0d;font-size:50px;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <i class="fa-solid fa-angle-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button style="padding-bottom:10%;padding-left:5%;color:#0d0d0d;font-size:50px;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="padding-bottom:10%;padding-left:10%;color:#0d0d0d;">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <i class="fa-solid fa-angle-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--  card -->

    <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top:-20%;padding-left:2%;padding-right:2%;padding-bottom:2%;">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for New AC?</h5>
                </div>
                <a href="ACResults.html"><img src="https://www.lg.com/in/images/air-conditioners/md07543435/gallery/PS-Q19ENZE-D-02.jpg" style="padding-left:15px;padding-right:15px;" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for New TV?</h5>
                </div>
                <a href="TVResults.html"><img src="https://m.media-amazon.com/images/I/71vZypjNkPS._SL1500_.jpg" class="card-img-top" style="padding-left:45px;padding-right:45px;" alt="..."></a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for New Laptop?</h5>
                </div>
                <a href="LaptopResults.html"><img src="https://www.reliancedigital.in/medias/Dell-3511-Laptops-491997684-i-1-1200Wx1200H-300Wx300H?context=bWFzdGVyfGltYWdlc3w3NDQ1MXxpbWFnZS9qcGVnfGltYWdlcy9oNGIvaGQ4Lzk2NDE3OTI1MzY2MDYuanBnfDdhMzlkOGUyNzY3ODQ0ZDlkMDY0Y2IyYzA0MzM5ODE1YmQwYTc4ZGNkNDlkZWM5YmZmZGQxMDg3YmFkNTY4YTI" style="padding-left:45px;padding-right:45px;" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for New Phone?</h5>
                </div>
                <a href="MobileResults.html"><img src="https://www.itel-india.com/wp-content/uploads/2021/09/Untitled-2-450x450.jpg" style="padding-left:45px;padding-right:45px;padding-bottom:15px;" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for Gaming Chair?</h5>
                </div>
                <img src="https://m.media-amazon.com/images/I/71-2V7Yd9gL._SL1500_.jpg" height="250px" style="padding-top:5px;padding-bottom:5px;" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for New Wall Clock?</h5>
                </div>
                <img src="https://www.ikea.com/in/en/images/products/tunnis-wall-clock-black__1013118_pe829057_s5.jpg?f=s" style="padding-left:45px;padding-right:45px;padding-bottom:15px;" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for New Shoes?</h5>
                </div>
                <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/qwqfyddzikcgc4ozwigp/revolution-5-road-running-shoes-szF7CS.png" style="padding-left:45px;padding-right:45px;padding-bottom:15px;" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Looking for New T-shirts?</h5>
                </div>
                <img src="https://images.prismic.io/rushordertees-web/c46d32cd-469a-49a9-b175-7362171d29a7_Custom+Short+Sleeve+T-Shirt.jpg?auto=compress%2Cformat&rect=0%2C0%2C800%2C900&w=800" style="padding-left:45px;padding-right:45px;padding-bottom:15px;" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
</body>

</html>