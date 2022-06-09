<?php

require_once 'config.php';




if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sql2 = "SELECT `Number` FROM `products` WHERE `ID` = 8";
    $result = $link->query($sql2);
    $row = $result->fetch_assoc();
    $temp = $row['Number'];

    $sql = "UPDATE `products` SET `Number` = $temp-1 WHERE `products`.`ID` = 8";
    $stmt=mysqli_prepare($link,$sql);

    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
}
else{
    echo "GET";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order | Indizon</title>
    <link rel="shortcut icon" type="image/png" href="Favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body style="padding: 50px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <div class="alert alert-success" role="alert">
      Your Order has been <b>Successfully</b> placed.
    </div>
    <ul class="list-group">
      <li style="margin-top: 3%;" class="list-group-item">
        <div class="container">
          <div class="row">
           
            <div class="col">
              <strong>Payment method: </strong>
                <br> Pay on delivery (Cash)

            </div>
            <div class="col">
              Choose a delivery speed: <br>
              <div style="display: inline-block;color: green">Tomorrow by 9pm </div>
  — FREE FREE Delivery on eligible orders

            </div>
          </div>
        </div>
      </li>
      <li style="margin-top: 3%"; class="list-group-item">
        <div class="container">
          <div class="row">
            <div class="col">
              <h4><div style="color: green;font-weight:600;margin-bottom: 5px;">Will be delivered in 7 working days.</div></h4>
              MSI Gaming Raider GE66, Intel 12th Gen. i7-12700H, 17.3" UHD 120Hz Gaming Laptop
              <br>
            </div>
            <div class="col">
              <strong>Order Summary</strong>
              Items:	₹369990
              <hr>
              <h3><div style="display: inline-block;color:#b12704;;">Order Total:	₹369990 </div></h3>
              <hr>
              <h6><div style="display: inline-block;color:#b12704;">Your Savings: ₹45000 (11%)  </div></h6>
             
              Item discount
            </div>
            <!-- <div class="col">
              <button type="button" class="btn btn-primary">Placed Your order</button>
            </div> -->
          </div>
        </div>
      </li>
    </ul>
      
  </body>
</html>