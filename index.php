<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Furniture store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Welcome to our Furniture store</h1>
                       <p>Flat 40% OFF on all products.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/diningtable.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Dining Tables</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/sofa.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Sofa</p>
                                    <p>Wide range of soft,comfortable sofas to choose from.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/beds.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Beds</p>
                                   <p>Our exquisite collection of beds.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
               </center>
               </div>
               <br><br><br><p class="text-center"></p>
           </footer>
        </div>
    </body>
</html>