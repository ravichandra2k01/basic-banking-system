<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  
</head>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("img/b.jpg");
  opacity : 0.95;

  /* Full height */
  height: 50%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.centered{
  position: absolute;
  top : 30%;
  left: 50%;
  transform : translate(-50%, -30%)
}
</style>


<?php
include 'navbar.php';
?>


</div>
    <!-- Introduction section -->
    <div class="bg"></div>
    <div class="centered"><h1>WELCOME  TO  SPARKS  BANK</h1></div>      

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/cu.jpeg" class="img-fluid" >
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">ADD USER</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/money.jpeg" class="img-fluid" style="background-size: 400px;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">MAKE PAYMENT</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/TH2.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">TRANSACTION HISTORY</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Created by <b>NAGABHUSHAN K M</b> <br>For The Sparks Foundation Internship Task</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
