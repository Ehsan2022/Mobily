<!DOCTYPE html>
<html lang="en">
<head>
<title>Mobile Shop - Cart Page</title>
    <?php
   include('generalLinks.php');
   ?>
</head>
<body>

 <!-- Header -->
    <!-- Search modal -->
    <?php
    include("navbar.php");
    include("searchModal.php");
   ?>

<h1>This is your cart!</h1>
         
<div class="col-12 col-md-4 mb-4 text-center d-block mx-auto product-cart">
      <div class="card h-100 py-3">
         <a href="shop-single.html">
               <img class="img-fluid" src="./assets/img/ip13f.jpg" alt="">
               <img class="img-fluid" src="./assets/img/ip13b.jpg" alt="">
         </a>
         <div class="card-body">
               <ul class="list-unstyled d-flex justify-content-center">
                  <li>Color : </li>
                  <li class=" text-right ms-1"> <button class="btn btn-success ms-1"></button><button class="btn btn-secondary ms-1"></button><button class="btn btn-primary ms-1"></button></li>
               </ul>
               <ul class="list-unstyled d-flex justify-content-center">
                  <li>RAM : </li>
                  <li class=" text-right"> 6 GB</li>
               </ul>
               <ul class="list-unstyled d-flex justify-content-center">
                  <li>ROM : </li>
                  <li class=" text-right"> 512 GB</li>
               </ul>
               <ul class="list-unstyled d-flex justify-content-center">
                  <li>Screen : </li>
                  <li class=" text-right"> 6 inch</li>
               </ul>
               <ul class="list-unstyled d-flex justify-content-between">
                  <li><button class="btn btn-outline-primary">-</button> <span>1</span> <button class="btn btn-outline-primary">+</button></li>
                  <li class=" text-right"> $1240.00</li>
               </ul>
         </div>
      </div>         
   </div>
    
<?php 
   include("footer.php");
   ?>
</body>
</html>